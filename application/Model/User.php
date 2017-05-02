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


class User extends Model{

    public function createUser()
    {
        $sth = $this->db->prepare("INSERT INTO Notandi(username, Fname, Lname, Password, KT, Phone, Email, Address, dateJoined)
      VALUES (:uname, :fname, :lname, :Password, :kt, :Phone, :Email, :address, CURRENT_TIMESTAMP )");

        $sth->bindParam(':fname', $_POST['fname']);
        $sth->bindParam(':lname', $_POST['lname']);
        $sth->bindParam(':uname', $_POST['uname']);
        $sth->bindParam(':Password', $_POST['Password']);
        $sth->bindParam(':kt', $_POST['kt']);
        $sth->bindParam(':Phone', $_POST['phone']);
        $sth->bindParam(':Email', $_POST['email']);
        $sth->bindParam(':address', $_POST['address']);

        if(!empty($_POST['kt']) && !empty($_POST['fname'] && !empty($_POST['lname']) && !empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['Password']) && !empty($_POST['address']))) {
            try {
                $sth->execute();
            } catch (\PDOException $e) {
                echo $e;
            }
        }
    }

    public function registerHouse()
    {
        if(isset($_POST['register'])) {

            $sql = $this->db->prepare("INSERT INTO Hus(Owner, Address, RegHouse, HeatSensor, HumidSensor, GasSensor)
        VALUES(:owner, :address, :reghouse, :heatsensor, :humidsensor, :gassensor)");

            $sql->bindParam(':owner', $_POST['owner']);
            $sql->bindParam(':address', $_POST['address']);
            $sql->bindParam(':reghouse', $_POST['reghouse']);
            $sql->bindParam(':regzip', $_POST['regzip']);
            $sql->bindParam(':heatsensor', $_POST['heatsensor']);
            $sql->bindParam(':humidsensor', $_POST['humidsensor']);
            $sql->bindParam(':gassensor', $_POST['gassensor']);


            if (!empty($_POST['owner']) && !empty($_POST['address']) && !empty($_POST['reghouse']) && !empty($_POST['heatsensor']) && !empty($_POST['humidsensor']) && !empty($_POST['gassensor'])) {
                try {
                    $sql->execute();
                } catch (\PDOException $e) {
                    echo $e;
                }
            }

        }
    }

    public function Login()
    {
        if (isset($_POST['login'])) {

            /*
            $uname_login = trim($_POST['uname']);
            $user_psw = trim($_POST['psw']);

            //Blowfish encryption

            $Blowfish_Pre = '$2a$05$';
            $Blowfish_End = '$';

            //Accepted characters for Blowfish encryption
            $Allowed_Chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
            $Chars_Len = 63;

            $Salt_Length = 21;
            $salt = "";

            for($i = 0; $i <= $Salt_Length; $i++)
            {
                $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
            }

            $bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;
            $database_password_hash = crypt($user_psw, $bcrypt_salt);

            //Blowfish end

            $sql = 'SELECT * FROM Notandi WHERE username = :uname ';
            $query = $this->db->prepare($sql);

            try {

                $query->execute(array(':uname' => $uname_login));
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach ($results as $row) {
                    $database_password_hash = $row['psw'];
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            */
            //var að testa eitthvað með þetta en ætla bara að geyma þetta þangað til seinna
            if (!empty($_POST['uname']) && !empty($_POST['Password'])) {
                //$uname = $_POST['username'];
                $sql = "SELECT * FROM Notandi WHERE username = ?";
                $query = $this->db->prepare($sql);
                try {
                    $redirect = "http://138.68.150.56/Verkefni6/Profile";
                    $query->execute(array($_POST['uname']));
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                    if(!empty($data)){
                        $firstRow = $data[0];
                    }
                    if ($_POST['Password'] == $firstRow['Password']) {
                        session_start();
                        $_SESSION['login'] = true;
                        session_regenerate_id();
                        header("Location: $redirect");
                        echo $_SESSION['login'];
                    } else {
                        //header("Location: http://138.68.150.56/Verkefni6/Login");
                        echo "<p>You must log in before venturing forth.</p>";
                    }


                } catch (Exception $e) {
                    echo $e;
                }

            }
        }
    }

    public function FetchUser()
    {
        $sql = "SELECT Notandi.KT, Notandi.Fname, Notandi.Lname, Notandi.Phone, Notandi.Email, Notandi.Address,
                Hus.houseID, Hus.Address FROM Notandi INNER JOIN Hus ON Notandi.Address = Hus.Address";
        $query = $this->db->prepare($sql);
        $query->execute();

        $results = $query->fetchAll();
        return $results;
    }

    public function SessionStart()
    {
        session_start();
    }

    public function SessionCheck()
    {
        //If session is started TRUE/FALSE
        if ( php_sapi_name() !== 'cli' ) {
            if ( version_compare(phpversion(), '5.4.0', '>=') ) {
                return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
            } else {
                return session_id() === '' ? FALSE : TRUE;
            }
        }
        return FALSE;
    }

}
