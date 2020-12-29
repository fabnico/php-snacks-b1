<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Fabrizio Nicolosi',
            'text' => 'e4'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Garry Kasparov',
            'text' => 'e5'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Fabrizio Nicolosi',
            'text' => 'Cf3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Garry Kasparov',
            'text' => 'Cc6'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Fabrizio Nicolosi',
            'text' => 'Ab4'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Garry Kasparov',
            'text' => ' 1 - 0'
        ]
    ],
];
?>

<ul>
      <?php
      foreach ($posts as $key => $post) {
         foreach ($post as $details){
            echo
            "<li>" .
             $key .
             " - " .
             $details['title'] .
             " scritto da : ".
             $details['author'] .
             " - messaggio : ".
             $details['text'] .
             "</li>";
         }
      }
      ?>
</ul>
