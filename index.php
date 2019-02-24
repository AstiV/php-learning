<?php

// //-----------------------------------
// // Arrays
// //-----------------------------------

// $animals = [
//     'Tiger',
//     'Dog',
//     'Lion',
//     'Mouse',
//     'Cat'
// ];

// // Iterate over array and display each item

// $names = [
// 'Mary',
// 'John',
// 'Anne' 
// ]

// foreach ($names as $name) {
//     echo $name.', ';
// }


// //----------------------------------------------------------------
// // Associative Arrays - Consist of any number of key-value pairs
// //----------------------------------------------------------------

// $person = [
//     'age' => 33,
//     'hair' => 'blond',
//     'position' => 'Frontend Developer'
// ]; 

// //----------------------------------------------------------------
// // Associative Arrays - Push a new item into array
// //----------------------------------------------------------------

// $person['name'] = 'Nina';
// var_dump($person);

// //----------------------------------------------------------------
// // Push a new item into regular array
// //----------------------------------------------------------------

// $animals = ['dog', 'cat'];
// $animals = 'elephant';

// var_dump($animals);

// //---------------------------------------------
// // Associative Arrays - Remove item from array
// //---------------------------------------------

// unset($person['age']);
// var_dump($person);

// //-------------------------------
// // Associative Arrays - exercise
// //-------------------------------

$task = [
    'title' => 'Go grocery shopping',
    'due' => 'Monday',
    'assigned_to' => 'me',
    'completed' => false
];




require 'index.view.php';
