<<<<<<< HEAD
<?php


//echo "session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
session_start();
if ($_SESSION['login'] == true) {

}
else {
    header("Location: http://138.68.150.56/Verkefni6/Login");
}


if (isset($_POST['logout']))
{
    //Invalidating the session cookie
    $_SESSION = [];
    if(isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(), '', time()-86400, '/');
    }
    //Ending session and redirecting
    session_destroy();

    header('Location: http://138.68.150.56/Verkefni6/');
    exit;
}


?>

<div class="container">
    <div class="box">
        <?php foreach ($results as $user) { ?>
        <H3>Register a house
            for: <?php if (isset($user->Fname)) echo "<b>" . htmlspecialchars($user->Fname, ENT_QUOTES, 'UTF-8') . "</b>"; ?></H3>
        <form class="pure-form" name="register" method="post">
            <fieldset>
                <legend>Please insert your information</legend>
                <div class="pure-g">
                    <div class="pure-u-1">
                        <label><b>Registered owner</b></label>
                        <input class="input" type="text" placeholder="Full name" name="owner" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Home address</b></label>
                        <input class="input" type="text" placeholder="Home address" name="address" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Register address</b></label>
                        <input class="input" type="text" placeholder="Register address" name="reghouse" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Zip code</b></label>
                        <input class="input" type="text" placeholder="Registered house ZIP" name=regzip" required>
                    </div>

                    <div class="pure-u-1">
                        <h3>Check in which sensors you would like to use</h3>
                        <label><b>Heat Sensor?</b></label>
                        <input class="input" type="checkbox" name="heatsensor" value="1">
                        <label><b>Humidity sensor?</b></label>
                        <input class="input" type="checkbox" name="humidsensor" value="1">
                        <label><b>Gas sensor?</b></label>
                        <input class="input" type="checkbox" name="gassensor" value="1">

                        <button type="register" class="pure-button pure-button-primary">Register</button>
                    </div>
                </div>
    </div>
    </fieldset>
    </form>
    <?php } ?>
</div>
</div>
=======
<?php
/**
 * Created by PhpStorm.
 * User: Eysteinn
 * Date: 12.4.2017
 * Time: 11:40
 */
?>

<div class="container">
    <div class="box">
        <?php foreach ($results as $user) { ?>
        <H3>Register a house
            for: <?php if (isset($user->Fname)) echo "<b>" . htmlspecialchars($user->Fname, ENT_QUOTES, 'UTF-8') . "</b>"; ?></H3>
        <form class="box" class="pure-form" method="post">
            <fieldset>
                <legend>Please insert your information</legend>
                <div class="pure-g">
                    <div class="pure-u-1">
                        <label><b>Registered owner</b></label>
                        <input class="input" type="text" placeholder="Full name" name="owner" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Home address</b></label>
                        <input class="input" type="text" placeholder="Home address" name="address" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Register address</b></label>
                        <input class="input" type="text" placeholder="Register address" name="reghouse" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Zip code</b></label>
                        <input class="input" type="text" placeholder="Registered house ZIP" name=regzip" required>
                    </div>

                    <div class="pure-u-1">
                        <h3>Check in which sensors you would like to use</h3>
                        <label><b>Heat Sensor?</b></label>
                        <input class="input" type="checkbox" name="check[]">
                        <label><b>Humidity sensor?</b></label>
                        <input class="input" type="checkbox" name="check[]">
                        <label><b>Gas sensor?</b></label>
                        <input class="input" type="checkbox" name="check[]">

                        <button type="submit" class="pure-button pure-button-primary">Register</button>
                    </div>
                </div>
    </div>
    </fieldset>
    </form>
    <?php } ?>
</div>
</div>
>>>>>>> 4ae96d5a65718358b69e7855debf66153836fc50
