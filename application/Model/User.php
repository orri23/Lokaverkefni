<?php
/**
 * Created by PhpStorm.
 * User: 0807932279
 * Date: 27.3.2017
 * Time: 13:44
 */

namespace Mini\Model;

use PDO;
use Mini\Core\Model;


class User extends Model
{

    public function createUser()
    {
        if (isset($_POST['signup'])) {
            $password = $this->better_crypt($_POST['Password']);
            $sth = $this->db->prepare("INSERT INTO Notandi(username, Fname, Lname, Password, KT, Phone, Email, Address, dateJoined)
      VALUES (:username, :fname, :lname, '$password' , :kt, :Phone, :Email, :address, CURRENT_TIMESTAMP )");
            $sth->bindParam(':fname', $_POST['fname']);
            $sth->bindParam(':lname', $_POST['lname']);
            $sth->bindParam(':username', $_POST['username']);
            $sth->bindParam(':kt', $_POST['kt']);
            $sth->bindParam(':Phone', $_POST['Phone']);
            $sth->bindParam(':Email', $_POST['email']);
            $sth->bindParam(':address', $_POST['address']);


            if (!empty($_POST['kt']) && !empty($_POST['fname'] && !empty($_POST['lname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['address']))) {
                try {
                    $sth->execute();
                } catch (\PDOException $e) {
                    echo $e;
                }
            }
        }
        return false;
    }

    public function registerHouse()
    {
        if (isset($_POST['register'])) {
            $sensors = $_POST['Sensor'];
            $checkbox = "";
            foreach ($sensors as $value) {
                $checkbox .= $value . ", ";
            }

            $sql = $this->db->prepare("INSERT INTO Hus(Owner, Address, RegHouse,RegZip, Sensors)
        VALUES(:owner, :address, :regaddress, :regzip, '$checkbox')");

            $sql->bindParam(':owner', $_POST['owner']);
            $sql->bindParam(':address', $_POST['address']);
            $sql->bindParam(':regaddress', $_POST['regaddress']);
            $sql->bindParam(':regzip', $_POST['regzip']);

            if (!empty($_POST['owner']) && !empty($_POST['address']) && !empty($_POST['regaddress']) && !empty($_POST['regzip'])) {
                try {
                    $sql->execute();
                } catch (\PDOException $e) {
                    echo $e;
                }
            }

        }
    }

    public function insertPhoto()
    {
        if (isset($_POST['upload'])) {
            $photo = "";
            foreach ($_FILES['name'] as $index) {
                if (!empty($tmpName)) {
                    $photo = $index;
                }
            }


            echo '<h3> Mynd: ' . $photo . '</h3>';
            $sql = $this->db->prepare("INSERT INTO myndir(image) VALUES ('$photo')");

            try {
                $sql->execute();
            } catch (\PDOException $e) {
                echo $e;
            }
        }
    }

    public function better_crypt($input, $rounds = 7)
    {
        $crypt_options = array(
            'cost' => $rounds
        );
        return password_hash($input, PASSWORD_BCRYPT, $crypt_options);
    }

    public function Login()
    {
        if (isset($_POST['login'])) {
            $_SESSION['username'] = $_POST['username'];
            if (!empty($username = $_POST['username']) && !empty($password = $_POST['Password'])) {
                $sql = "SELECT * FROM Notandi WHERE username=:username";
                $query = $this->db->prepare($sql);
                $query->execute(array(':username' => $username));
                $results = $query->fetchAll(PDO::FETCH_ASSOC);

                $password_hash = "";
                foreach ($results as $row) {
                    $password_hash = $row['Password'];
                    $isAdmin = $row['isAdmin'];
                }
                try {
                    $redirect = "http://138.68.150.56/Verkefni6/Profile";
                    $adminRedirect = "http://138.68.150.56/Verkefni6/adminpage";
                    if (password_verify($password, $password_hash)) {

                        session_start();
                        session_regenerate_id();
                        $_SESSION['login'] = TRUE;
                        header("Location: $redirect");
                        return TRUE;
                    } else {
                        return FALSE;
                    }


                } catch (Exception $e) {
                    echo $e;
                }
            }
        }

    }

    public function FetchUser()
    {
        $username = "";
        if (isset($_SESSION['login'])) {
            $username = $_SESSION['username'];
        }
        $sql = "SELECT KT, Fname, Lname, Phone, Email, Address, dateJoined FROM Notandi WHERE username = '$username'";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();

    }

    public function FetchHouse()
    {
        $username = $_SESSION['username'];
        $sql = "SELECT Owner, Address, RegHouse, RegZip, Sensors FROM Hus WHERE username = '$username'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function SessionStart()
    {
        session_start();


    }

    public function SessionCheck()
    {
        //If session is started TRUE/FALSE
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }

}
