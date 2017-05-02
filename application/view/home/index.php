<?php

//Headers
$loginUrl = 'http://138.68.150.56/Verkefni6/Login';
$signupUrl = 'http://138.68.150.56/Verkefni6/Signup';

if (isset($_POST['login'])) {
    header('Location: ' . $loginUrl);
}

if (isset($_POST['signup'])) {
    header('Location: ' . $signupUrl);
}
//Headers end


?>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Welcome to RealTemp</h1>
        <p class="splash-subhead">
            A company specialized in keeping your home safe.
        </p>
        <p>
            <a href="signup" class="pure-button pure-button-primary">Create account</a>
        </p>
    </div>
</div>

<div class="content">
    <div class="ribbon l-box-lrg pure-g">
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">About us</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>
</div>