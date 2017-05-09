<?php
use File\Upload; //þetta verður að vera efst í kóðanum, til þess að sækja í klasann sem Upload í stað fulls nafns
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
    echo "<img src = 'myndir\\" . $_FILES['image']['name'] . "'>"; //sækir mynd úr mynda möppunni
    echo "<br>";
    echo "myndir\\".$_FILES['image']['name'];
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/Verkefni6/application/view/profile/myndir/"; //þetta path/slóð verður að vera rétt
    echo "<br><br>";
    echo $destination; 
    
 require_once 'File/upload.php';
    
    try {
         
        $loader = new Upload($destination);
        
        $loader->upload();
        
        $result = $loader->getMessages();

    } catch (Exception $e) {
         echo $e->getMessage();  
    }
}


?>


<?php


?>


<div class="content">
    <div class="pure-u-g">
        <h3> Your account information: </h3>
        <div class="pure-u-1">

            <table class="pure-table pure-table-horizontal is-center">
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
        
        if (isset($result)) {
            echo '<ul>';
             //þessi if setning fer í gang þegar það er búið að ýta á Upload
             // birtir skilaboðin úr Upload klasanum sem segir message sem er það
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>

    <div class="pure-u-g">
        <div class="pure-u-1-4">

            <form class="pure-form" action="" method="post" enctype="multipart/form-data" id="uploadImage">
                <p>
                    
                    <input type="file" name="image" id="image" class="hidden">
                    <label for="image">Select a profile picture (Click me) </label>
                </p>
                <br>
                <p>
                    <input type="submit" name="upload" id="upload" value="Upload">
                </p>
            </form>

            <style>
            
            input[type="submit"] {

                background-color: #1ab188;
                color: white;
            }

              input[type="submit"]:hover {

                color: #AECFE5;
            }
            input[type='file'] {
            
            opacity:0    
            
            }


            

            </style>
        </div>
        <div class="pure-u-1-2" style="padding:1em;">
            <?php foreach ($images as $value) { ?>
            <img src="public/img/<?php if (isset($value->imgName)) echo htmlspecialchars($value->imgName, ENT_QUOTES, 'UTF-8') . '" class="pure-img-responsive">'; ?>
            <?php } ?>
        </div>



        </div>
    </div>
</div>

