<?php

$file = "SRT.srt";

if (file_exists($file)) {

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Content-Length: ' . filesize($file));

    readfile($file);

    unlink($file);

    exit;
}

echo "File not found";

?>