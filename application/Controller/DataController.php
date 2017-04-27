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

use Mini\Model\Data;
use Mini\Model\User;

class DataController
{
    public function index()
    {
        //Initializing user class for session check
        $User = new User();
        $User->SessionCheck();

        //Initializing data class for fetching data into table
        $Data = new Data();
        $datas = $Data->getAllData();
        $Data->insertAllData();

        require APP . 'view/_templates/header.php';
        require APP . 'view/data/data.php';
        require APP . 'view/_templates/footer.php';
    }
}