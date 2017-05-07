<?php

if ($_SESSION['login'] == true) {

} else {
    header("Location: http://138.68.150.56/Verkefni6/Login");
}

if (isset($_POST['logout'])) {
    //Invalidating the session cookie
    $_SESSION = [];
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 86400, '/');
    }
    //Ending session and redirecting
    session_destroy();

    header('Location: http://138.68.150.56/Verkefni6/');
    exit;
}

?>

<!--USER PROFILE-->

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
    </div>

<?php
# use keyword must be declared at the top level of a script. It cannot be nested inside a conditional statement.
use File\Upload; # declaration, so you can refer to the class as Upload rather than using the fully qualified name
if (isset($_POST['upload'])) {


    echo "<pre>";
    print_r($_FILES);  # Skoðum skráarupplýsingar
    echo "</pre>";
    echo "<img src = 'media\\" . $_FILES['image']['name'] . "'>";
    echo "<br>";
    echo "media\\".$_FILES['image']['name'];
    // define the path to the upload folder
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/media/";  # Þú þarft að breyta slóð
    // svo við getum notað class með t.d. move() fallið og getMessage() ogsfrv...
    require_once '/var/www/html/Verkefni6/application/view/profile';
    // Because the object might throw an exception
    try {
        // búum til upload object til notkunar.  Sendum argument eða slóðina að upload möppunni sem á að geyma skrá
        $loader = new Upload($destination);
        // köllum á og notum move() fallið sem færir skrá í upload möppu, þurfum að gera þetta strax.
        $loader->upload();
        // köllum á getMessage til að fá skilaboð (error or not).
        $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessage();  # ef við náum ekki að nota Upload class
    }
}

?>

<html>
<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
        
        if (isset($result)) {
            echo '<ul>';
            
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
        <p>
            <label for="image">Upload an image to your profile:</label>
            <input type="file" name="image" id="image">
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Upload">
        </p>
    </form>

    <style>

   .submit { 

      background-color: #1ab188;

     }


    </style>

</body>
</html>
