<?php

$name = $_GET['name'];
$file = $_GET['file'];
$type = $_GET['type'];

setcookie($name, $file . ':' . $type . ':' . time() . ':' . $_SERVER['HTTP_ACCEPT'] . ':' . $_SERVER['HTTP_USER_AGENT']);

header('Content-Type: ' . $type);

$file = 'images/' . $file;
header('Content-Length: ' . filesize($file));
readfile($file);
