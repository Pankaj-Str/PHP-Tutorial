<?php
// Open a file for appending (creates a new file or appends to an existing one)
$filename = "p4n1.txt";
$file = fopen($filename, "a");

// Check if the file was opened successfully
if ($file) {
    // Append data to the file
    fwrite($file, "\n@p4n.in -------- ");

    // Close the file when done
    fclose($file);
    echo "Data appended to file successfully!";
} else {
    echo "Unable to open file for appending!";
}
?>
