<?php

if ($_SESSION['login'] == true) {

} else {
    header("Location: http://138.68.150.56/Verkefni6/Login");
}

if (isset($_POST['logout'])) {
    
    $_SESSION = [];
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 86400, '/');
    }
    
    session_destroy();

    header('Location: http://138.68.150.56/Verkefni6/');
    exit;
}

?>
<?php

if (isset($_POST['upload'])) {


    echo "<pre>";
    print_r($_FILES);  
    echo "</pre>";
    echo "<img src = 'myndir\\" . $_FILES['image']['name'] . "'>";
    echo "<br>";
    echo "myndir\\".$_FILES['image']['name'];
    // define the path to the upload folder
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/Verkefni6/application/view/profile/myndir/"; 
    echo "<br><br>";
    echo $destination;

}

ini_set('mysql.connect.timeout', 300);
ini_set('default_socket_timeout',300);

?>


<?php




?>



<div class="content is-center">
    <div class="pure-u-g">
        <h3> Your account information: </h3>
        <div class="pure-u-1">

            <table class="pure-table pure-table-bordered">
                <thead>
                <tr>
                    <td>Social Security</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Date Joined</td>
                    <td>Registered Owner</td>
                    <td>Address</td>
                    <td>Registered House</td>
                    <td>Zip Code</td>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($values as $value) { ?>
                <tr>
                    <td><?php if (isset($value->KT)) echo "<b>" . htmlspecialchars($value->KT, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <td><?php if (isset($value->Fname)) echo "<b>" . htmlspecialchars($value->Fname, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <td><?php if (isset($value->Lname)) echo "<b>" . htmlspecialchars($value->Lname, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <td><?php if (isset($value->Phone)) echo "<b>" . htmlspecialchars($value->Phone, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <td><?php if (isset($value->Email)) echo "<b>" . htmlspecialchars($value->Email, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <td><?php if (isset($value->Address)) echo "<b>" . htmlspecialchars($value->Address, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <td><?php if (isset($value->dateJoined)) echo "<b>" . htmlspecialchars($value->dateJoined, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <?php } ?>
                    <?php foreach ($values2 as $value) { ?>
                        <td><?php if (isset($value->Owner)) echo "<b>" . htmlspecialchars($value->Owner, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                        <td><?php if (isset($value->Address)) echo "<b>" . htmlspecialchars($value->Address, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                        <td><?php if (isset($value->RegHouse)) echo "<b>" . htmlspecialchars($value->RegHouse, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                        <td><?php if (isset($value->RegZip)) echo "<b>" . htmlspecialchars($value->RegZip, ENT_QUOTES, 'UTF-8') . "</b>"; ?></td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
        <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
            <p>
                <label for="image">Upload an image to your profile:</label>
                <input type="file" name="image" id="image">
            </p>
            <p>
                <input type="submit" name="upload" id="upload" value="Upload">
            </p>
        </form>
    </div>


<html>
<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
        /*
        if (isset($results)) {
            echo '<ul>';
            
            foreach ($results as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
        */
    ?>

    <?php 


    ?>


    <style>

   


    </style>

</body>
</html>
