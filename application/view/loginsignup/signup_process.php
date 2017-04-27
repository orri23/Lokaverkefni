<?php

//Login validation
$ktError = "";
$fnameError = "";
$lnameError = "";
$userError = "";
$emailError = "";
$passwordError = "";
$addressError = "";

if(isset($_POST['signup']))
{
    if(empty($_POST['kt']))
    {
        $ktError = "* You must fill out this field.";
    }
    else
    {
        $kt = test_input($_POST['kt']);
        if (!preg_match('/^[1-9][0-9]{9}$/', $kt))
        {
            $ktError = "Numerical values only allowed.";
        }
    }

    if(empty($_POST['fname']))
    {
        $fnameError = "* You must fill out this field.";
    }
    else
    {
        $fname = test_input($_POST['fname']);
        if (!preg_match('/^[a-zA-Z\s-]+$/i', $fname))
        {
            $fnameError = "* You must enter a valid first name.";
        }
    }

    if(empty($_POST['lname']))
    {
        $lnameError = "* You must fill out this field.";
    }
    else
    {
        $lname = test_input($_POST['lname']);
        if (!preg_match('/^[a-zA-Z\s-]+$/i', $lname))
        {
            $lnameError = "* You must use legal characters.";
        }

    }

    if(empty($_POST['username']))
    {
        $userError = "* You must fill out this field.";
    }
    else
    {
        $name = test_input($_POST['username']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name))
        {
            $userError = "* Only letters and white space allowed.";
        }
    }

    if(empty($_POST['email']))
    {
        $emailError = "* You must fill out this field.";
    }
    else
    {
        $email = test_input($_POST['email']);
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email))
        {
            $emailError = "* This email is not valid.";
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

