<?php

// Given array of random numbers
$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];

// Function to filter even numbers greater than 50
$filterFunction = function($num) {
    return ($num > 50 && $num % 2 == 0);
};

// Function to multiply each element by 2
$mapFunction = function($num) {
    return $num * 2;
};

// Filtering even numbers greater than 50
$filteredNumbers = array_filter($randomNumbers, $filterFunction);

// Mapping each filtered number by multiplying with 2
$resultArray = array_map($mapFunction, $filteredNumbers);

// Displaying the resulting array
print_r($resultArray);

?>
