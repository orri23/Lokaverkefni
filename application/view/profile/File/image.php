<?php
namespace File;

// function
 class Mynd
 {
     protected $name;
     protected $size;
     protected $owner;
     protected $path;
     public function __construct($file){
       $this -> name = $file['image']['name'];
       $this -> size = $file['image']['size'];
       $this -> owner = $owner;
       $this -> path = "media\\" . $file['image']['name'];
     }


     public function getImageName(){
       return $this -> name;
     }
     public function getOwnerName(){
       return $this -> owner;
     }

     public function getImageSize(){
       return $this -> size;
     }
     public function getPath(){
       return $this -> path;
     }
     public function setImageName($newname){
       $this -> name = $newname;
     }
     public function setPath($newpath){
       $this -> path = $newpath;
     }

     public function setOwnerName($newowner){
       $this -> owner = $newowner;
     }

     public function showImageSize(){
    
       return $this -> size;
     }
     public function showImage(){
      
       return $this -> name;
     }
 }
?>