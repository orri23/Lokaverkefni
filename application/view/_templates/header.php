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
    <title>RealTemperature - Upplýsingar um hita, raka, alkahól -stig í húsum notenda </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- logo, check the CSS file for more info how the logo "image" is shown -->    

    <!-- navigation -->
    <div class="logo">
    <h1 class="logo"> RealTemperature </h1>
    </div>
    <div class="navigation">
        <?php
        if(is_session_started() === TRUE)
        {
            echo '<a href="data">Gögn</a>';
            echo '<a href="registration">Register a house</a>';
            echo '<a href="profile">Profile</a>';
            echo '<a href="home" method="post" name="logout">Log Out</a>';
        }
        else
        {

        }

        ?>
        
    </div>
