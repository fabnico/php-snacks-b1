<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

echo "<div style= 'background-color: grey;'>";
    foreach($db["teachers"] as $value){
    echo($value["name"].
    " " .
    $value["lastname"]  .
    " ");
   }
echo "</div>";
echo "<div style= 'background-color: green;'>";
    foreach($db["pm"] as $value){
    echo($value["name"].
    " " .
    $value["lastname"]  .
    " ");
}
echo "</div>";

?>
