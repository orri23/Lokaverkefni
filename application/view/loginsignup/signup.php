<?php

require "signup_process.php";

//If no errors occurr with sign up, redirect.
if (isset($_POST['signup']) && empty($ktError) && empty($fnameError) && empty($lnameError) && empty($userError) && empty($emailError) && empty($passwordError) && empty($addressError)) {
    echo "Sign up successful. Redirecting to login page...";
    header("refresh:5; url=http://138.68.150.56/Verkefni6/Login");
}
?>
<div class="content">
    <form class="pure-form" name="signup" method="post">
        <div class="l-box-lrg">


            <H1> Sign up </H1>

            <div class="pure-g">

                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Social security: </label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="kt">
                    <span class=""> <?php echo '<br>' . $ktError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-5">
                    <label>First name: </label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="fname">
                    <span class=""> <?php echo '<br>' . $fnameError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Last name:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="lname">
                    <span class=""> <?php echo '<br>' . $lnameError; ?> </span>
                </div>

                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Address:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="address">
                    <span class=""> <?php echo '<br>' . $addressError; ?> </span>
                </div>

                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Email:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="email">
                    <span class=""> <?php echo '<br>' . $emailError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Phone:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="email">
                    <span class=""> <?php echo '<br>' . $userError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Username:</label>
                    <input class="pure-u-23-24" type="text" placeholder="" name="username">
                    <span class=""> <?php echo '<br>' . $userError; ?> </span>
                </div>
                <div class="pure-u-1 pure-u-md-1-5">
                    <label>Password:</label>
                    <input class="pure-u-23-24" type="password" placeholder="" name="Password">
                    <span class=""> <?php echo '<br>' . $passwordError; ?> </span>
                </div>

            </div>

            <input name="signup" type="submit" value="Sign up" class="pure-button pure-button-active">
        </div>

    </form>

</div>








