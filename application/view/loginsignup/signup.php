<?php
include "signup_process.php";

if (isset($_POST['signup']) && empty($ktError) && empty($fnameError) && empty($lnameError) && empty($userError) && empty($emailError) && empty($passwordError) && empty($addressError)) {
    echo "Sign up successful. Redirecting to login page...";
    header("refresh:5; url=http://138.68.150.56/Verkefni6/Login");
}
?>
<div class="content">
    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
        <form class="pure-form pure-form-stacked" name="signup" method="post">
            <legend>Please fill out the following fields</legend>
            <fieldset>
                <H1> Sign up </H1>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label>Social security:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="kt">
                    <span class=""> <?php echo $ktError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label>First name:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="fname">
                    <span class=""> <?php echo $fnameError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label>Last name:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="lname">
                    <span class=""> <?php echo $lnameError; ?> </span>
                </div>

                <div class="pure-u-1 pure-u-md-1-3">
                    <label>Address:</label>
                    <input type="text" placeholder="" name="address">
                    <span class=""> <?php echo $addressError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label>Email:</label>
                    <input type="text" placeholder="" name="email">
                    <span class="e"> <?php echo $emailError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label>Username:</label>
                    <input type="text" placeholder="" name="uname">
                    <span class=""> <?php echo $userError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <label>Password:</label>
                    <input type="password" placeholder="" name="Password">
                    <span class=""> <?php echo $passwordError; ?> </span>
                </div>
                <input name="signup" type="submit" value="Sign up" class="pure-button pure-button-active">


            </fieldset>
        </form>
    </div>

