<?php

$class = [
        [
            'name' => 'Marco',
            'lastname' => 'Marchi',
            'vote' => [
               8,
               9,
               5,
               4
            ]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Fabielli',
            'vote' => [
               3,
               8,
               10,
               2
            ]
        ],
        [
            'name' => 'luca',
            'lastname' => 'luchelli',
            'vote' => [
               5,
               5,
               5,
               5
            ]
         ]
   ];

?>
 <ul>
    <?php
      foreach ($class as $value) {
         $average = array_sum($value['vote']) / count($value['vote']);
         echo "<li>".
         $value['name'] .
         " " .
         $value['lastname'] .
         " - Media voti: " .
         $average .
         "</li>";
      }
     ?>
 </ul>
