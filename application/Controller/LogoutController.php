<?php

//Log out controller - Safely logs out the user

namespace Mini\Controller;

class LogoutController
{
    public function index()    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/logout.php';
        require APP . 'view/_templates/footer.php';
    }
}

?>