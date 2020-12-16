<?php

define('_HOST', 'localhost');
define('_DB_USUARIO', 'root');
define('_DB_PASSWORD', '');
define('_DB_DATABASE', 'gdlwebcamp');

$conn = new mysqli(_HOST, _DB_USUARIO, _DB_PASSWORD, _DB_DATABASE);

if($conn->connect_error) {
  echo $conn->connect_error;
}
