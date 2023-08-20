# PHP Control Structures

| Sn.No. | Topic |
|------|----|
|1. |If…Else Statements|
|2. |Switch…Case Statements|

The `if...else` statement is used for conditional execution of code blocks. It allows you to control the flow of your program based on whether a certain condition is true or false. Here's the basic syntax:

```php
if (condition) {
    // Code to execute if the condition is true
} else {
    // Code to execute if the condition is false
}
```

You can also use an `else if` block to handle multiple conditions:

```php
if (condition1) {
    // Code to execute if condition1 is true
} elseif (condition2) {
    // Code to execute if condition2 is true
} else {
    // Code to execute if none of the conditions are true
}
```

Here's an example that demonstrates the use of `if...else` statements:

```php
$temperature = 25;

if ($temperature > 30) {
    echo "It's hot outside.";
} elseif ($temperature > 20) {
    echo "It's warm outside.";
} else {
    echo "It's cool outside.";
}
```

In this example, the code checks the value of the `$temperature` variable and displays a message depending on its value.

You can also nest `if...else` statements within each other to handle more complex conditions:

```php
$age = 18;
$isStudent = true;

if ($age >= 18) {
    if ($isStudent) {
        echo "You are an adult student.";
    } else {
        echo "You are an adult.";
    }
} else {
    echo "You are a minor.";
}
```

# PHP Switch…Case Statements

The `switch...case` statement is used to perform different actions based on different values of a given expression. It's an alternative to using multiple `if...elseif` statements when you have many possible conditions to check. Here's the basic syntax:

```php
switch (expression) {
    case value1:
        // Code to execute if expression matches value1
        break;
    case value2:
        // Code to execute if expression matches value2
        break;
    // ...
    default:
        // Code to execute if no cases match the expression
}
```

The `switch` statement evaluates the given expression and then compares it against the different `case` values. If a match is found, the corresponding code block is executed. The `break` statement is used to exit the `switch` block once a match is found. If no match is found, the code within the `default` block (if provided) is executed.

Here's an example that demonstrates the use of `switch...case` statements:

```php
$dayOfWeek = "Monday";

switch ($dayOfWeek) {
    case "Monday":
        echo "It's the beginning of the week.";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's a workday.";
        break;
    case "Friday":
        echo "It's almost the weekend.";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "Invalid day.";
}
```

In this example, the code checks the value of the `$dayOfWeek` variable and provides different messages based on the day of the week.

Keep in mind that you can have multiple `case` statements with the same code block, as shown in the example above where several days of the week fall under the "workday" category.

The `switch...case` statement can be a cleaner and more concise way to handle scenarios where you have multiple possible values to compare against.
