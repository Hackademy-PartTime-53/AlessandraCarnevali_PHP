

<?php

$words1 = [


    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
        'oscura', 'era', 89, ['mezzo', 'E'],
        'ritrovai', 'per'
    ],
    'diritta'
    
];



$words2 = [
        "elemento1" => 25.89,
        "elemento2" => "possa",
        "elemento3" => [
            "Virgilio",
            "Favore",
            "favore",
            ["Fortuna"]
        ],
        "fine"=> "!"
];


$la = "la";
$a = "a";

$results = $words1[6][3][1] ." ". $words2["elemento2"] . " ". $la . " " . $words2["elemento3"][3][0] . " ". $words1[2] . " " . $words1[5] . " " . $a . " " . $words1 [0] . " " . $words2["elemento3"][2] . " " . $words2["fine"];


echo $results;







?>

