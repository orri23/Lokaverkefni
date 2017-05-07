<?php
/**
 * Created by PhpStorm.
 * User: Eysteinn
 * Date: 30.3.2017
 * Time: 12:41
 */


//Profile controller - initializes the profile page

namespace Mini\Controller;

use Mini\Model\User;

class ProfileController
{
    public function index()
    {
        //User Class initialized

        $user = new User();
        $user->Login();
        $user->SessionStart();
        $user->SessionCheck();
        $values = $user->FetchUser();
        $values2 = $user->FetchHouse();




        require APP . 'view/_templates/header.php';
        require APP . 'view/profile/profile.php';
        require APP . 'view/_templates/footer.php';
    }
}

?>
