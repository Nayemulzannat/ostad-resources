<?php

// Class 
class car{
   public $color="Red";

   public function driving(){
        echo "I am driving";
   }

   public function washing(){
    echo "I am washing";
   }
   
}

// Object
$CarObj=new car();

echo $CarObj->washing();


$CarObj->driving();



