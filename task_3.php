<?php
// Task 3
$micaela = ['surname' => 'Abrahams', 'age' => 25, 'height' => 176, 'shoe size' => 4.5];
$simoney = ['surname' => 'Scott', 'age' => 30, 'height' => 156, 'shoe size' => 3];
$kyro = ['surname' => 'Abrahams', 'age' => 2.5, 'height' => 20, 'shoe size' => 'none'];

//Create an empty array called $class.
$class = [$micaela, $simoney, $kyro];

//Display the height of the first person
print_r($micaela ['height'].'</br>') ;

//the age of the second
print_r($simoney ['age'].'</br>');

//shoe size of the third!
print_r($kyro ['shoe size'].'</br>');

// Add a new person to the front of the class.
$nova = ['surname' => 'Roodt', 'age' => 2.1, 'height' => 25, 'shoe size' => 'none'];

array_unshift($class, $nova);

// print_r($class).'</br>';

//Display the height, age, and shoe size of the new person.
print_r($nova['height'].'</br>');
print_r($nova['age'].'</br>');
print_r($nova['shoe size']);

// print_r(['surname' => $nova['surname']]);
?>