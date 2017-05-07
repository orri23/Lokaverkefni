<?php


namespace Mini\Controller;

use Mini\Model\User;

class AdminController
{
    public function index()
    {
        $User = new User();
        $User->SessionCheck();
        $User->Login();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/loginsignup/admin.php';
        require APP . 'view/_templates/footer.php';
    }

}
