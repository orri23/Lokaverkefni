<?php

//Login validation
$userError = "";
$passwordError = "";

if(isset($_POST['login']))
{
    if(empty($_POST['username']))
    {
        $userError = "* You must enter a valid username";
    }
    else
    {
        $name = test_input($_POST['username']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name))
        {
            $userError = "* Only letters and white space allowed.";
        }
    }

    if(empty($_POST['Password']))
    {
        $passwordError = "* You must enter a valid password";
    }
    else {
        $password = test_input($_POST['Password']);
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
            $passwordError = "* You must enter a valid password";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

