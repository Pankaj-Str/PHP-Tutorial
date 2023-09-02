<?php
// Open a file for writing (creates a new file or overwrites an existing one)
$filename = "p4n.txt";
$file = fopen($filename, "w");

// Check if the file was opened successfully
if ($file) {
    // Write data to the file
    fwrite($file, "Hello, World!\n");
    fwrite($file, "This is a PHP file handling example.\n");
    fwrite($file, "www.codeswithpankaj.com\n");

    // Close the file when done
    fclose($file);
    echo "Data written to file successfully!";
} else {
    echo "Unable to open file for writing!";
}
?>
