<?php

//echo "session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
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

<div class="splash-container">
    <div class="splash">
        
        <h3> User info </h3>
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
        <br>

        <h3>Registered house</h3>
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

</div>
