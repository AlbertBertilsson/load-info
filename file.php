<?php

//echo $_GET['file'];
$file = 'images/mammut.jpg';

header('Content-Type: image/jpg');
header('Content-Length: ' . filesize($file));

readfile($file);
