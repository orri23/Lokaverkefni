<?php

/**
 * Class SongsController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\User;

class SignupController
{
    public function index()
    {
        $User = new User();
        $User->createUser();
        $User->SessionCheck();

<<<<<<< HEAD
=======
        // load views. within the views we can echo out $songs and $amount_of_songs easily
>>>>>>> 4ae96d5a65718358b69e7855debf66153836fc50
        require APP . 'view/_templates/header.php';
        require APP . 'view/loginsignup/signup.php';
        require APP . 'view/_templates/footer.php';
    }
}
