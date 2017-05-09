<?php
include "login_process.php";

if (isset($_POST['login'])) {
$_SESSION['username'] = $_POST['username'];
}



?>

<div class="content">
    <div class="l-box-lrg pure-g">
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <form class="pure-form pure-form-stacked" name="login" method="post">
                <fieldset>
                    <h1> Log in </h1>
                    <label><b>Username: </b></label>
                    <input type="text" placeholder="" name="username">
                    <span class=""> <?php echo $userError; ?> </span>

                    <label><b>Password: </b></label>
                    <input type="password" placeholder="" name="Password">
                    <span class=""> <?php echo $passwordError; ?></span>
                </fieldset>
                <input name="login" type="submit" value="Log in" class="pure-button pure-button-active"><br>
            </form>
        </div>
    </div>
</div>
