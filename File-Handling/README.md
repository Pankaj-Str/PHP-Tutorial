# File Handling  Reading and Writing

PHP provides a variety of functions for handling files, including reading from and writing to them. Here are some examples of reading from and writing to a file in PHP:

**Reading from a File:**

```php
<?php
// Open a file for reading
$filename = "p4n.txt";
$file = fopen($filename, "r");

// Check if the file was opened successfully
if ($file) {
    // Read the file line by line
    while (($line = fgets($file)) !== false) {
        echo $line; // Output each line
    }

    // Close the file when done
    fclose($file);
} else {
    echo "Unable to open file!";
}
?>
```

In this example, we use `fopen` to open a file in read mode ("r"). Then, we use `fgets` in a loop to read each line from the file until we reach the end of the file. Finally, we close the file using `fclose`.

**Writing to a File:**

```php
<?php
// Open a file for writing (creates a new file or overwrites an existing one)
$filename = "p4n.txt";
$file = fopen($filename, "w");

// Check if the file was opened successfully
if ($file) {
    // Write data to the file
    fwrite($file, "Hello, World!\n");
    fwrite($file, "This is a PHP file handling example.");

    // Close the file when done
    fclose($file);
    echo "Data written to file successfully!";
} else {
    echo "Unable to open file for writing!";
}
?>
```

In this example, we use `fopen` to open a file in write mode ("w"). If the file doesn't exist, it will be created. We then use `fwrite` to write data to the file. The `fclose` function is used to close the file when we're done.

**Appending to a File:**

If you want to append data to an existing file without overwriting its content, you can use "a" mode with `fopen`:

```php
<?php
// Open a file for appending (creates a new file or appends to an existing one)
$filename = "p4n.txt";
$file = fopen($filename, "a");

// Check if the file was opened successfully
if ($file) {
    // Append data to the file
    fwrite($file, "\nAppended text.");

    // Close the file when done
    fclose($file);
    echo "Data appended to file successfully!";
} else {
    echo "Unable to open file for appending!";
}
?>
```

In this case, "a" mode allows you to add data to the end of an existing file without erasing its content.

Make sure you have appropriate file permissions to read from or write to the file, and replace "example.txt" with the actual file path you want to work with.
