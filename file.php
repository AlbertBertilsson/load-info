<?php

$name = $_GET['name'];
$file = $_GET['file'];
$type = $_GET['type'];

setcookie($name, $file . ':' . $type . ':' . time());
header('Content-Type: ' . $type);
header('Content-Length: ' . filesize($file));

readfile($file);
