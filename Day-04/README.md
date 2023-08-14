# PHP Operators

### What is Operators in PHP

Operators are symbols that tell the PHP processor to perform certain actions. For example, the addition (+) symbol is an operator that tells PHP to add two variables or values, while the greater-than (>) symbol is an operator that tells PHP to compare two values.

The following lists describe the different operators used in PHP.

## PHP Arithmetic Operators



| Operator | 	Description| 	Example| 	Result|
|----------|-----------|-------|-------|
|+ |	Addition| 	$x + $y| 	Sum of $x and $y|
|- |	Subtraction| 	$x - $y |	Difference of $x and $y.|
|* 	|Multiplication| 	$x * $y |	Product of $x and $y.|
|/ 	|Division 	|$x / $y 	|Quotient of $x and $y|
|% 	|Modulus 	|$x % $y 	|Remainder of $x divided by $y|


```php
<?php
// Arithmetic operators example

$x = 10;
$y = 5;

$sum = $x + $y;
$difference = $x - $y;
$product = $x * $y;
$quotient = $x / $y;
$remainder = $x % $y;
$exponentiation = $x ** $y;

echo "x = $x, y = $y\n\n";
echo "Addition: x + y = $sum\n";
echo "Subtraction: x - y = $difference\n";
echo "Multiplication: x * y = $product\n";
echo "Division: x / y = $quotient\n";
echo "Modulus: x % y = $remainder\n";
echo "Exponentiation: x ** y = $exponentiation\n";
?>
```

When you run this program, it will output:

```
x = 10, y = 5

Addition: x + y = 15
Subtraction: x - y = 5
Multiplication: x * y = 50
Division: x / y = 2
Modulus: x % y = 0
Exponentiation: x ** y = 100000
```

# PHP Assignment Operators

## The assignment operators are used to assign values to variables.

|Operator 	|Description| 	Example| 	Is The Same As|
|---------|------|---------|--------|
|= |	Assign| 	$x = $y| 	$x = $y|
|+= 	|Add and assign 	|$x += $y 	|$x = $x + $y|
|-= 	|Subtract and assign 	|$x -= $y 	|$x = $x - $y|
|*= 	|Multiply and assign 	|$x *= $y 	|$x = $x * $y|
|/= 	|Divide and assign quotient| 	$x /= $y |	$x = $x / $y|
|%= 	|Divide and assign modulus |	$x %= $y |	$x = $x % $y|



```php
<?php
// Assignment operators example

$x = 10;
$y = 5;

echo "Initial values: x = $x, y = $y\n\n";

$x += $y; // Equivalent to: $x = $x + $y;
echo "After x += y: x = $x\n";

$x -= $y; // Equivalent to: $x = $x - $y;
echo "After x -= y: x = $x\n";

$x *= $y; // Equivalent to: $x = $x * $y;
echo "After x *= y: x = $x\n";

$x /= $y; // Equivalent to: $x = $x / $y;
echo "After x /= y: x = $x\n";

$x %= $y; // Equivalent to: $x = $x % $y;
echo "After x %= y: x = $x\n";

$x **= $y; // Equivalent to: $x = $x ** $y;
echo "After x **= y: x = $x\n";
?>
```

When you run this program, it will output:

```
Initial values: x = 10, y = 5

After x += y: x = 15
After x -= y: x = 10
After x *= y: x = 50
After x /= y: x = 10
After x %= y: x = 0
After x **= y: x = 0
```



For more information and examples, please refer to the [official PHP documentation on arithmetic operators](https://www.php.net/manual/en/language.operators.arithmetic.php).
