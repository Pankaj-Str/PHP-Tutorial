// Sorting Arrays

// Numeric array
$numericArray = array(10, 5, 30, 20);

// Sorting numeric array in ascending order
sort($numericArray);
print_r($numericArray);  // Output: [5, 10, 20, 30]

// Sorting numeric array in descending order
rsort($numericArray);
print_r($numericArray);  // Output: [30, 20, 10, 5]

// Associative array
$assocArray = array(
    "apple" => 10,
    "banana" => 5,
    "cherry" => 30,
    "date" => 20
);

// Sorting associative array by values in ascending order
asort($assocArray);
print_r($assocArray);
// Output: ["banana" => 5, "apple" => 10, "date" => 20, "cherry" => 30]

// Sorting associative array by values in descending order
arsort($assocArray);
print_r($assocArray);
// Output: ["cherry" => 30, "date" => 20, "apple" => 10, "banana" => 5]

// Sorting associative array by keys in ascending order
ksort($assocArray);
print_r($assocArray);
// Output: ["apple" => 10, "banana" => 5, "cherry" => 30, "date" => 20]

// Sorting associative array by keys in descending order
krsort($assocArray);
print_r($assocArray);
// Output: ["date" => 20, "cherry" => 30, "banana" => 5, "apple" => 10]
