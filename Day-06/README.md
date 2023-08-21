# PHP Array 

An array is a data structure that can hold multiple values under a single variable name. Arrays are versatile and commonly used to store collections of data, such as lists of items or sets of related values. PHP arrays can be indexed numerically or associatively, allowing you to access values using keys.

There are several ways to create and manipulate arrays in PHP:

1. **Numeric Indexed Arrays:**
   Numeric indexed arrays are arrays where each value is assigned a numerical index starting from 0.

   ```php
   $numericArray = array(10, 20, 30, 40);
   // or using short syntax in PHP 5.4+
   $numericArray = [10, 20, 30, 40];
   ```

2. **Associative Arrays:**
   Associative arrays use named keys to access values instead of numerical indices.

   ```php
   $assocArray = array(
       "name" => "John",
       "age" => 25,
       "city" => "New York"
   );
   // or using short syntax
   $assocArray = [
       "name" => "John",
       "age" => 25,
       "city" => "New York"
   ];
   ```

3. **Mixed Arrays:**
   Arrays can also contain a mix of numerical and associative keys.

   ```php
   $mixedArray = array(
       0 => "apple",
       "fruit" => "banana",
       2 => "cherry"
   );
   ```

4. **Adding Elements:**
   You can add elements to an array using either the array assignment syntax or the `[]` shorthand.

   ```php
   $numericArray[] = 50;  // Add at the end
   $assocArray["gender"] = "Male";  // Add with key "gender"
   ```

5. **Accessing Elements:**
   You can access array elements using their indices or keys.

   ```php
   echo $numericArray[0];  // Outputs: 10
   echo $assocArray["name"];  // Outputs: John
   ```

6. **Looping through Arrays:**
   You can use loops to iterate through arrays.

   ```php
   foreach ($numericArray as $value) {
       echo $value . " ";
   }
   // Outputs: 10 20 30 40
   ```

7. **Array Functions:**
   PHP provides various built-in functions to manipulate arrays, such as `count()`, `array_push()`, `array_pop()`, `array_merge()`, and more.

   ```php
   $count = count($numericArray);  // Returns the number of elements
   array_push($numericArray, 50);  // Adds an element at the end
   $lastValue = array_pop($numericArray);  // Removes and returns the last element
   ```

8. **Multidimensional Arrays:**
   Arrays can also hold other arrays, creating multidimensional arrays.

   ```php
   $matrix = array(
       array(1, 2, 3),
       array(4, 5, 6),
       array(7, 8, 9)
   );
   ```
# PHP Sorting Arrays

PHP provides a range of functions to sort arrays in different ways. You can sort both indexed (numeric) arrays and associative arrays based on their values or keys. Here are some common sorting functions in PHP:

1. **Sorting Indexed Arrays by Values:**

   ```php
   $numericArray = array(10, 5, 30, 20);

   // Ascending order
   sort($numericArray);
   // Result: [5, 10, 20, 30]

   // Descending order
   rsort($numericArray);
   // Result: [30, 20, 10, 5]
   ```

2. **Sorting Associative Arrays by Values:**

   ```php
   $assocArray = array(
       "apple" => 10,
       "banana" => 5,
       "cherry" => 30,
       "date" => 20
   );

   // Ascending order by values
   asort($assocArray);
   // Result: ["banana" => 5, "apple" => 10, "date" => 20, "cherry" => 30]

   // Descending order by values
   arsort($assocArray);
   // Result: ["cherry" => 30, "date" => 20, "apple" => 10, "banana" => 5]
   ```

3. **Sorting Associative Arrays by Keys:**

   ```php
   $assocArray = array(
       "apple" => 10,
       "banana" => 5,
       "cherry" => 30,
       "date" => 20
   );

   // Ascending order by keys
   ksort($assocArray);
   // Result: ["apple" => 10, "banana" => 5, "cherry" => 30, "date" => 20]

   // Descending order by keys
   krsort($assocArray);
   // Result: ["date" => 20, "cherry" => 30, "banana" => 5, "apple" => 10]
   ```

4. **Custom Sorting:**
   
   You can also define your custom sorting criteria using the `usort()` function for indexed arrays and `uasort()` for associative arrays. These functions allow you to specify a comparison function.

   ```php
   $names = array("John", "Alice", "Bob");

   // Custom sorting by string length
   usort($names, function($a, $b) {
       return strlen($a) - strlen($b);
   });
   // Result: ["Bob", "John", "Alice"]
   ```

These are just a few examples of the sorting functions available in PHP. Depending on your specific use case, you can choose the appropriate sorting function to organize your arrays in the desired order.
