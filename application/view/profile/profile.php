<?php
/*
$a = "login";
session_id($a);*/
if(empty($a)) session_start();
echo "session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];

session_start();
if ($_SESSION['login'] == true) {
  //header("Location: http://138.68.150.56/Verkefni6/Login");
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

<!--USER PROFILE-->

<div class="container">
    <div class="box">
        <h1>Prófíll</h1>
        <p>Mynd</p>
        <img src="public/img/avatar.jpg" class="avatar">
        <form name="upload" method="post">
        <input name="uploadAvatar" type="submit" value="Upload" class="pure-button">
        </form>
        
        <h3> Persónu upplýsingar 1 </h3>
        <div class="pure-g">
            <?php foreach($results as $user) { ?>
                    <div class="pure-u-1-3 info"><p>Social security</p>
                    <?php if (isset($user->KT)) echo "<b>" . htmlspecialchars($user->KT, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
                    </div>
                    <div class="pure-u-1-3 info"><p>First Name</p>
                    <?php if (isset($user->Fname)) echo "<b>" . htmlspecialchars($user->Fname, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
                    </div>
                    <div class="pure-u-1-3 info"><p>Last Name</p>
                    <?php if (isset($user->Lname)) echo "<b>" . htmlspecialchars($user->Lname, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
                    </div>
        </div>
            <?php } ?>

        <h3> Persónu upplýsingar 2 </h3>
        <div class="pure-g">
            <?php foreach($results as $user) { ?>
                    <div class="pure-u-1-3 info"><p>House ID</p>
                    <?php if (isset($user->Phone)) echo "<b>" . htmlspecialchars($user->Phone, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
                    </div>
                    <div class="pure-u-1-3 info"><p>Address</p>
                    <?php if (isset($user->Email)) echo "<b>" . htmlspecialchars($user->Email, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
                    </div>
                    <div class="pure-u-1-3 info"><p>Zip code</p>
                    <?php if (isset($user->Address)) echo "<b>" . htmlspecialchars($user->Address, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
                    </div>
        </div>
        <?php } ?>

        <h3>Upplýsingar á húsi </h3>
        <div class="pure-g">
            <?php foreach($results as $user) { ?>
            <div class="pure-u-1-3 info"><p>House ID</p>
                <?php if (isset($user->houseID)) echo "<b>" . htmlspecialchars($user->houseID, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
            </div>
            <div class="pure-u-1-3 info"><p>Address</p>
                <?php if (isset($user->Address)) echo "<b>" . htmlspecialchars($user->Address, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
            </div>
            <div class="pure-u-1-3 info"><p>Zip code</p>
                <?php if (isset($user->zipcode)) echo "<b>" . htmlspecialchars($user->zipcode, ENT_QUOTES, 'UTF-8') . "</b>"; ?>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="box">
        <form name="logout" method="post">
            <input name="logout" type="submit" value="Log out" class="pure-button">
        </form>
    </div>

</div>
