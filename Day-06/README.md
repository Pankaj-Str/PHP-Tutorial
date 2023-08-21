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
