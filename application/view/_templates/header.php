<?php




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
        <a href="<?php echo URL; ?>">Heim</a>
        <?php
        if($_SESSION['login']) {
            $a = "login";
            session_id($a);
            if (session_id($a)) {
                echo '<a href="data">Gögn</a>';
            }
        }
        ?>
        <a href="<?php echo URL; ?>">Register A House</a>
        <a href="<?php echo URL; ?>" name="logout">Log Out</a>

             
        
    </div>
