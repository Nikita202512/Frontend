<?php


 class myMozyr
 {
   const PI = 3.14;
   public static $bar = 'Mozyr';

   public $bbb = 555;
  
   public static function bca() {
     $obj = new self();
     echo $obj->bbb;
   }
 }
 echo 'Hello World';
