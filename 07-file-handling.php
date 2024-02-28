<?php

declare(strict_types=1);
//php reading files

$file = 'files/doc.txt';

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize(($file)));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Karera you have done it';
    fwrite($handle, $contents);
    fclose($handle);
    echo $contents;
}
