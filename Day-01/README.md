# PHP Variables

In PHP, variables are used to store and manipulate data. They provide a way to assign a value to a name and then refer to that value using the name. PHP variable names are case-sensitive and must start with a dollar sign ($) followed by a valid variable name. Here's a basic overview of how variables work in PHP:

1. **Variable Declaration:**
   You declare a variable by using the dollar sign ($) followed by the variable name. Variable names must start with a letter or underscore (_) and can be followed by letters, numbers, and underscores.

   ```php
   $variableName = value;
   ```

2. **Assigning Values:**
   You can assign values of various types to variables, such as strings, numbers, arrays, objects, and more.

   ```php
   $name = "John";
   $age = 25;
   $pi = 3.14;
   $isStudent = true;
   ```

3. **Variable Types:**
   PHP is a loosely typed language, meaning you don't need to explicitly specify the data type of a variable. PHP will automatically determine the type based on the value assigned.

4. **Concatenation:**
   You can concatenate strings and variables using the `.` operator.

   ```php
   $fullName = $firstName . " " . $lastName;
   ```

5. **Variable Scope:**
   Variables have different scopes depending on where they are defined. The main scopes are:
   - Global scope: Variables defined outside functions or classes can be accessed globally.
   - Local scope: Variables defined inside functions or blocks are only accessible within that function or block.

6. **Superglobals:**
   PHP provides several built-in superglobal arrays that can be accessed from any scope, such as `$_GET`, `$_POST`, `$_SESSION`, `$_COOKIE`, `$_SERVER`, etc. These arrays contain information from external sources like form data, URLs, etc.

   ```php
   $userInput = $_POST['username']; // Accessing data from a form submitted via POST
   ```

7. **Variable Variables:**
   PHP allows you to use a variable's value as the name of another variable.

   ```php
   $varName = "count";
   $$varName = 10; // Creates a variable named $count with a value of 10
   ```

8. **Constants:**
   Constants are similar to variables, but once defined, their value cannot be changed throughout the script's execution.

   ```php
   define("PI", 3.14);
   ```
