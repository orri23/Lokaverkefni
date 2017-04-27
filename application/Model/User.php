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

  /*  public function newUser($full_name_from_signup, $user_name_from_signup,$database_password_hash, $email_from_signup)
    {
        //Undirbúið sql fyrir insert skipun
        $sth = $this->dbh->prepare("INSERT INTO user(username, name, password,email)
						VALUES (:username, :fname, :password, :email)");

        //Placeholderar og breytur bundnar saman
        $sth->bindParam(':fname', $full_name_from_signup);
        $sth->bindParam(':username', $user_name_from_signup);
        $sth->bindParam(':password', $database_password_hash);
        //$sth->bindParam(':password', $user_password_from_signup);
        $sth->bindParam(':email', $email_from_signup);

        try{
            $sth->execute();
            return true;
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
            return false;
        }


    }*/

    public function createUser()
    {
      $sth = $this->db->prepare("INSERT INTO Notandi(username, Fname, Lname, Password, KT, Phone, Email, Address)
      VALUES (:username, :fname, :lname, :password, :KT, :Phone, :Email, :address)");

      $sth->bindParam(':fname', $_POST['fname']);
      $sth->bindParam(':lname', $_POST['lname']);
      $sth->bindParam(':username', $_POST['uname']);
      $sth->bindParam(':password', $_POST['psw']);
      $sth->bindParam(':KT', $_POST['kt']);
      $sth->bindParam(':Phone', $_POST['phone']);
      $sth->bindParam(':Email', $_POST['email']);
      $sth->bindParam(':address', $_POST['address']);

      if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['uname'])
    && !empty($_POST['psw'])) {

        $sth->execute();
      }


    }

    public function registerHouse()
    {
<<<<<<< HEAD
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
=======
        $sql = $this->db->prepare("INSERT INTO Hus(Owner, Address, RegHouse, HeatSensor, HumidSensor, GasSensor) VALUES(:owner, :address, :reghouse, )");

        $sql->bindParam(':Owner', $_POST['owner']);
        $sql->bindParam(':Address', $_POST['address']);
        $sql->bindParam(':RegHouse', $_POST['reghouse']);
        $sql->bindParam(':RegZip', $_POST['regzip']);
        /*
        $sql->bindParam(':HeatSensor', $_POST['heatsensor']);
        $sql->bindParam(':HumidSensor', $_POST['humidsensor']);
        $sql->bindParam(':GasSensor', $_POST['gassensor']);
        */

        if(!empty($_POST['owner']) && !empty($_POST['address']) && !empty($_POST['reghouse']) && !empty($_POST['heatsensor']) && !empty($_POST['humidsensor']) && !empty($_POST['gassensor']))
        {
            $checkbox = $_POST['check'];
            $chk="";

            foreach($checkbox as $chk)
            {
                $results = $chk;
            }


            try
            {
                $sql->execute();
            }
            catch(\PDOException $e)
            {
                echo $e;
>>>>>>> 4ae96d5a65718358b69e7855debf66153836fc50
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
            if (!empty($_POST['username']) && !empty($_POST['Password'])) {
                //$uname = $_POST['username'];
                $sql = "SELECT * FROM Notandi WHERE username = ?";
                $query = $this->db->prepare($sql);
                try {
                    $redirect = "http://138.68.150.56/Verkefni6/Profile";
                    $query->execute(array($_POST['username']));
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                    $firstRow = $data[0];
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

    public function SessionCheck()
    {

      $_SESSION['login'] = true;
    }

}
