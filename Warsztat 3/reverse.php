<?php

if (isset($_POST['submit'])) {
    $filename = $_FILES["file"]["name"];
    $tmp_file = $_FILES["file"]["tmp_name"];
    $lines = file($tmp_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $lines = array_map('trim', $lines);
    $reversed_lines = array_reverse($lines);
    $new_filename = "reversed_$filename";
    $new_file = fopen($new_filename, "w");

    foreach ($reversed_lines as $reversed_line) {
        fwrite($new_file, $reversed_line . PHP_EOL);
    }

    fclose($new_file);

    // Set the headers for downloading the modified file
    header("Content-Disposition: attachment; filename=\"$new_filename\"");
    header("Content-Type: application/octet-stream");
    header("Content-Length: " . filesize($new_filename));

    // Output the contents of the modified file
    readfile($new_filename);

    // Delete the new file
    unlink($new_filename);
} else {
    echo <<<HTML
    <h1>Reverse File</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <br>
        <input type="submit" name="submit" value="Reverse">
    </form>
HTML;
}


