<?php
/**
 * Created by PhpStorm.
 * User: Eysteinn
 * Date: 7.5.2017
 * Time: 20:49
 */

namespace Mini\Model;

use PDO;
use Mini\Core\Model;

class Upload extends Model
{
    protected $uploaded = [];
    protected $destination;
    protected $max = 2000000;
    protected $messages = [];
    protected $permitted = [
        'image/gif',
        'image/jpeg',
        'image/pjpeg',
        'image/png'
    ];

    public function upload()
    {

        $uploaded = current($_FILES);


        if ($this->checkFile($uploaded)) {


            $this->moveFile($uploaded);
        }
    }


    public function getMessages()
    {
        return $this->messages;
    }



    protected function checkFile($file)
    {
        return true;
    }


    protected function moveFile($file)
    {


        $success = move_uploaded_file($file['tmp_name'], $this->destination . $file['name']);


        if ($success) {
            $result = $file['name'] . ' was uploaded successfully';
            $this->messages[] = $result;
        } else {
            $this->messages[] = 'Could not upload ' . $file['name'];
        }
    }
}