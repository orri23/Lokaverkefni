<?php
/**
 * Created by PhpStorm.
 * User: Eysteinn
 * Date: 29.3.2017
 * Time: 17:57
 */
?>

<div class="container">
    <div class="box">
        <H1>Sign up</H1>
        <form name="signupform" method="post">
            <label><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fname" required>

            <label><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lname" required>

            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label>email</label>
            <input type="text" name="email" />

            <label>kt</label>
            <input type="text" name="kt" />

            <label>phone</label>
            <input type="text" name="phone"  />

            <label>address</label>
            <input type="text" name="address"  />

            <input name="signup" type="submit" value="Sign up" class="pure-button pure-button-active">
        </form>
    </div>
</div>
