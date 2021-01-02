<?php
   $array = [];
   while(count($array) < 15){
      $num = rand(1,100);
      if(!in_array($num,$array)){
         $array[] = $num;
      }
   }
   var_dump($array);
?>
