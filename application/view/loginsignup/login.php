<?php
include "login_process.php";
?>

<div class="container">
    <div class="box">
        <H1>Innskráning</H1>
        <form name="login" method="post">

            <label><b>Notendanafn:</b></label>
            <input type="text" placeholder="" name="username" required><br>
            <span class="Error"> <?php echo $userError; ?> </span>

            <label><b>Lykilorð:</b></label>
            <input type="password" placeholder="" name="Password" required><br>
            <span class="Error"> <?php echo $passwordError; ?></span>

            <input name="login" type="submit" value="Skrá mig inn!" class="pure-button pure-button-active"><br>
        </form>
    </div>
</div>
