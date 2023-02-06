<?php
// Task 1
$fruits = ["Pineapple", "Apple", "Mango", "White Grapes", "Banana"];

// Then display the first one.
echo $fruits[0] .'</br>';
// Then display the last one.
echo $fruits[4] .'</br>';

//Remove one fruit from the beginning of the array
array_shift($fruits);
echo $fruits[0] .'</br>';

//add one to the end
array_pop($fruits);
echo $fruits[2].'</br>';

//Display the first and last elements again.
echo $fruits[0].'</br>';
echo $fruits[2].'</br>';

//Replace the 3rd item of the array with 3 others.
$fruits [2] = ["Kiwi", "Paw Paw", "Oranges"];
// print_r($fruits).'</br>';

// Sort Alphabetically
sort($fruits);
// print_r($fruits)

// Convert Array into a String (Implode)
$string = implode(", ", $fruits);
echo $string;

?>