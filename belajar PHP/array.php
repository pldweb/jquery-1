<?php

// Indexed array 

$a = ['Honda','BMW','Suzuki'];

// Assosiatif array

$b = [
  'Rusia' => 'Moskow',
  'Indonesia' => 'Jakarta',
  'Belanda' => 'Amsterdam',
];

$c = [
      'a' => $a,
      'b' => $b,
];


// Multidimensional array 
$d = [
  'c' => $c,
  'lainnya' => [1,2,3,4,5]
];

var_dump($d);














?>