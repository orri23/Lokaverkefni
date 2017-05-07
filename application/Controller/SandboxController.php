<?php

/**
 * Class HomeController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\User;


class SandboxController
{
    public function index()
    {
        $User = new User();
        $User->Login();
        $User->FetchUser();
        $User->SessionCheck();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/sandbox.php';
        require APP . 'view/_templates/footer.php';
    }
}
