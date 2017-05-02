<?php

//Invalidating the session cookie
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//Ending session and redirecting
session_destroy();

header('Location: http://138.68.150.56/Verkefni6/home');
