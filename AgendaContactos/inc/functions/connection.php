<?php

define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'agenda');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// echo $conn->ping();