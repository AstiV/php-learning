<?php

// To run this project, cd into directory 'php-learning'
// > php -S localhost:8888


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

//$task = [
//    'title' => 'Go grocery shopping',
//    'due' => 'Monday',
//    'assigned_to' => 'me',
//    'completed' => false
//];

// //-------------
// // Functions
// //-------------

//built-in functions
//htmlspecialchars();
//ucwords();

//$animals = ['dog', 'cat'];
////// dd - for dump and die
////function dd($data) {
////    echo '<pre>';
////    die(var_dump($data));
////    echo '<pre>';
////}
////dd($animals);

// //-------------------------------------
// // Isolate functions to separate file
// //-------------------------------------

//require 'functions.php';
//
//$animals = ['dog', 'cat'];
//dd($animals);

// //-------------------------
// // Exercise - Age checker
// //-------------------------

// Check if a person is allowed to a nightclub.
// Age below 21, not allowed
// Age above 21 allowed
// Function that accepts one parameter => age
// use cond. in function (if else) return a boolean

require 'functions.php';



require 'index.view.php';
