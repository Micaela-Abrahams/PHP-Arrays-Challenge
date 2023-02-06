<?php
// Task 2

// Make an associative array that stores your height, age, and shoe size. 

$micaela = ['surname' => 'Abrahams', 'age' => 25, 'height' => 176, 'shoe size' => 4.5];

//Display the elements of the array.
print_r($micaela) .'</br>';

// You've hit a growth spurt! Add 10cm to the height and display the new value.
$micaela ['height'] = 186;
print_r($micaela);

//Now you found the fountain of youth! Become two years younger and display the new age.
$micaela ['age'] = 23;
print_r($micaela);
?>