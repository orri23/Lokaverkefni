<?php
/**
 * Created by PhpStorm.
 * User: Eysteinn
 * Date: 30.3.2017
 * Time: 12:41
 */


//Registration controller - initializes the profile page

namespace Mini\Controller;

use Mini\Model\User;

class RegistrationController
{
    public function index()
    {
        //User Class initialized

        $User = new User();
        $User->registerHouse();
        $User->SessionStart();
        $User->SessionCheck();



        require APP . 'view/_templates/header.php';
        require APP . 'view/profile/registration.php';
        require APP . 'view/_templates/footer.php';
    }
}

?>
