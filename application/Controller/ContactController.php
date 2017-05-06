<?php


namespace Mini\Controller;

use Mini\Model\User;

class ContactController
{
    public function index()
    {
        $User = new User();
        $User->SessionCheck();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/contact.php';
        require APP . 'view/_templates/footer.php';
    }

  }
