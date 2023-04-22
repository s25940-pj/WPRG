<?php
$file = 'links.txt';
$table = '<table><tr><th>Link</th><th>Description</th></tr>'; // start the HTML table

if (file_exists($file)) {
    $lines = file($file);

    foreach ($lines as $line) {
        $fields = explode(';', trim($line));
        $link = $fields[0];
        $description = $fields[1];
        $table .= "<tr><td>$link</td><td>$description</td></tr>";
    }

    $table .= '</table>'; // close the HTML table
    echo $table;
} else {
    echo "File not found.";
}

