<?php

//Headers
$loginUrl = 'http://138.68.150.56/Verkefni6/Login';
$signupUrl = 'http://138.68.150.56/Verkefni6/Signup';

if (isset($_POST['login']))
{
    header('Location: '.$loginUrl);
}

if (isset($_POST['signup']))
{
    header('Location: '.$signupUrl);
}
//Headers end



?>

<div class="container index">
    <div class="box">
        <form name="options" method="post">
            <h3> Velkomin(n) </h3> 
            <h3> Vinsamlegast skráðu þig inn á núverandi aðgang eða búðu til nýjan aðgang </h3>
            <input name="login" type="submit" value="Innskráning" class="pure-button pure-button-active">
            <input name="signup" type="submit" value="Skrá nýjan notenda" class="pure-button pure-button-active">
        </form>
    </div>
</div>
