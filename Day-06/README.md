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

```php
array(
    key  => value,
    key2 => value2,
    key3 => value3,
    ...
)
```
The comma after the last array element is optional and can be omitted. This is usually done for single-line arrays, i.e. array(1, 2) is preferred over array(1, 2, ). For multi-line arrays on the other hand the trailing comma is commonly used, as it allows easier addition of new elements at the end.

```yml
Note: A short array syntax exists which replaces array() with [].
```

1. Example #1 A simple array

```php
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>
```

2. Example #2 Type Casting and Overwriting example
```php
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>
```
The above example will output:
```yml
array(1) {
  [1]=>
  string(1) "d"
}
```

3. Example #3 Mixed int and string keys

```php
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>
```
The above example will output:
```yml
array(4) {
  ["foo"]=>
  string(3) "bar"
  ["bar"]=>
  string(3) "foo"
  [100]=>
  int(-100)
  [-100]=>
  int(100)
}
```
The key is optional. If it is not specified, PHP will use the increment of the largest previously used int key.


4. Example #4 Indexed arrays without key
```php
<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
?>
```
The above example will output:
```yml
array(4) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(5) "hello"
  [3]=>
  string(5) "world"
}
```
