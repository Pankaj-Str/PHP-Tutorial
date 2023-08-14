<?php 

//PHP Arithmetic Operators
$num1 = 900;
$num2 = 45;
$Addition = $num1+$num2;
//print output
echo("Addition : ".$Addition."<hr>");
$Subtraction = $num1 - $num2;
echo("Subtraction : ".$Subtraction."<hr>");
$Multiplication = $num1 * $num2;
echo("Multiplication : ".$Multiplication."<hr>");
$Division = $num1 / $num2;
echo("Division : ".$Division."<hr>");
$Modulus = $num1 % $num2;
echo("Modulus : ".$Modulus."<hr>");

//Assignment Operators

// ' = ' Assignment Operators 
$number = 90;
echo("Assignment Operators : = ".$number."<hr>");
//$number = $number + 10;
$number +=10;
echo($number."<hr>");
$number -=10;
echo($number."<hr>");
$number /=10;
echo($number."<hr>");
$number *=10;
echo($number."<hr>");
$number %=10;
echo($number."<hr>");
?>
<h1>Comparison Operators</h1>
<?php

echo("Equal : == ".(34 == 34)."<hr>");
echo("X Identical : === ".(34 === '34')."<hr>");
echo("Not equal : != ".(34 != 80)."<hr>");
echo("X Not equal : <> ".(34 <> 80)."<hr>");
echo("Not identical : !== ".(34 !== '80')."<hr>");
echo("Less than : < ".(34 < 80)."<hr>");
echo("Greater than : > ".(34 > 80)."<hr>");
echo("Less than or equal to : <= ".(34 <= 80)."<hr>");
echo("Greater than or equal to : >= ".(34 >= 80)."<hr>");
echo("X Spaceship : <=> ".(34 <=> 80)."<hr>");


?>