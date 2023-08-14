# PHP Constants 

Constants are identifiers (names) that represent a single, unchangeable value throughout the script's execution. Unlike variables, constants cannot be altered once they are defined. They are often used for values that are not expected to change, such as configuration settings, mathematical constants, or other values that remain constant.

Here's how you define and use constants in PHP:

1. **Defining Constants:**
   Constants are defined using the `define()` function. The function takes two arguments: the constant's name (usually in uppercase) and its value.

   ```php
   define("CONSTANT_NAME", value);
   ```

   For example:

   ```php
   define("PI", 3.14);
   define("SITE_NAME", "My Website");
   ```

2. **Using Constants:**
   Once defined, constants can be used throughout your script without the need for a leading dollar sign ($). You simply reference the constant name.

   ```php
   echo "The value of PI is " . PI;
   echo "Welcome to " . SITE_NAME;
   ```

3. **Constants vs. Variables:**
   - Constants cannot be redefined or changed after they're defined.
   - Constants are automatically global and can be accessed from any part of the script.
   - Constants are case-sensitive by default, unlike variables which are case-sensitive or case-insensitive based on PHP settings.

4. **Magic Constants:**
   PHP also provides a set of predefined constants called "magic constants" that provide information about the script. These constants start and end with two underscores (e.g., `__LINE__`, `__FILE__`, `__DIR__`, `__FUNCTION__`, `__CLASS__`, `__NAMESPACE__`, etc.).

   ```php
   echo "This is line number " . __LINE__;
   echo "The current file is " . __FILE__;
   ```

5. **Class Constants:**
   In addition to global constants, you can define constants within classes using the `const` keyword. Class constants are associated with the class and can be accessed using the class name.

   ```php
   class MyClass {
       const MY_CONSTANT = "Some value";
   }

   echo MyClass::MY_CONSTANT;
   ```

# Simple example that demonstrates how to define and use constants in PHP:

```php
<?php
// Define constants
define("SITE_NAME", "My Awesome Website");
define("PI", 3.14159);

// Using constants
echo "Welcome to " . SITE_NAME . "<br>";
echo "The value of PI is " . PI . "<br>";

// Class with constants
class MathConstants {
    const EULER_NUMBER = 2.71828;
    const GOLDEN_RATIO = 1.61803;
}

echo "The Euler number is " . MathConstants::EULER_NUMBER . "<br>";
echo "The golden ratio is " . MathConstants::GOLDEN_RATIO . "<br>";
?>
```

In this example:
- The constants `SITE_NAME` and `PI` are defined using the `define()` function.
- The constants are then used within `echo` statements to display their values.
- The `MathConstants` class defines two class constants, `EULER_NUMBER` and `GOLDEN_RATIO`, using the `const` keyword.
- The class constants are accessed using the class name followed by the `::` operator.

When you run this PHP script, it will output:

```
Welcome to My Awesome Website
The value of PI is 3.14159
The Euler number is 2.71828
The golden ratio is 1.61803
```

This demonstrates how constants can be defined, accessed, and used both at the global level and within classes.

   
