<?php
// Open a file for reading
$filename = "p4n.txt";
$file = fopen($filename, "r");

// Check if the file was opened successfully
if ($file) {
    // Read the file line by line
    while (($line = fgets($file)) !== false) {
        echo($line."<br>"); // Output each line
    }

    // Close the file when done
    fclose($file);
} else {
    echo "Unable to open file!";
}
?>
