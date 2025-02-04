<?php

$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];

// Parole mancanti
$words3 = [
    ['Nel'],
    ['di camin'],
    ['di nostra vita'],
    ['per una selva'],
    [", che' la"], 
    ['via'],
    ['smarrita'],
];


$results = $words3[0][0] . " " . $words1[7][3][0] . " " . $words3[1][0] . " " . $words3[2][0] . " " . $words1[4] . " " . $words1[8] . " " . $words1[7][4] . " " . $words1[7][5] . " " . $words3[3][0] . " " . $words1[7][0] . " " . $words3[4][0] . " " . $words1[10] . " " . $words3[5][0] . " " . $words1[7][12] . " " . $words3[6][0];


echo $results;

?>

