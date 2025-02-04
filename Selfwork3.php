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


$frase = "Nel " . $words1[7][3][0] . " di cammin di nostra vita " . $words1[4] . " " . $words1[8] . " per una selva " . $words1[7][0] . ", che' la " . $words1[10] . " via " . $words1[7][1] . " smarrita";


echo $frase;

?>
