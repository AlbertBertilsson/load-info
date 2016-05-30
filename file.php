<?php

//echo $_GET['file'];
$file = 'images/mammut.jpg';

header('Content-Type: image/jpeg');
header('Content-Length: ' . filesize($file));

readfile($file);
