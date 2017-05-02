<?php


function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RealTemperature</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- logo, check the CSS file for more info how the logo "image" is shown -->    

    <!-- navigation -->

    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="home">RealTemp</a>

            <ul class="pure-menu-list">
                <?php
                if (is_session_started() === TRUE) {
                    echo '<li class="pure-menu-item"><a href="data" class="pure-menu-link">Your sensors</a></li>';
                    echo '<li class="pure-menu-item"><a href="registration" class="pure-menu-link">Register a house</a></li>';
                    echo '<li class="pure-menu-item"><a href="profile" class="pure-menu-link">Account management</a></li>';
                    echo '<li class="pure-menu-item"><a href="logout" class="pure-menu-link">Log out</a></li>';

                } else {

                    echo '<li class="pure-menu-item"><a href="home" class="pure-menu-link">Home</a></li>';
                    echo '<li class="pure-menu-item"><a href="login" class="pure-menu-link">Log in</a></li>';
                    echo '<li class="pure-menu-item"><a href="signup" class="pure-menu-link">Sign Up</a></li>';

                }
                ?>
            </ul>
        </div>
    </div>


