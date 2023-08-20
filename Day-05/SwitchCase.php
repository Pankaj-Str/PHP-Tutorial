<?php 
  $grade = 85;

switch (true) {
    case ($grade >= 90 && $grade <= 100):
        $letterGrade = "A";
        break;
    case ($grade >= 80 && $grade < 90):
        $letterGrade = "B";
        break;
    case ($grade >= 70 && $grade < 80):
        $letterGrade = "C";
        break;
    case ($grade >= 60 && $grade < 70):
        $letterGrade = "D";
        break;
    default:
        $letterGrade = "F";
}

echo "Your numerical grade is $grade, which corresponds to the letter grade $letterGrade.";

  
?>
