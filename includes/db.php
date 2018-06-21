<?php


$DB_CONNECTION = getenv('DB_CONNECTION');
$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USER');
$DB_PASS = getenv('DB_PASS');
$DB_NAME = getenv('DB_NAME');

if ($DB_CONNECTION !== false) {
    $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
} else {
    $connection = mysqli_connect('localhost', 'dev', 'pass', 'my_academy_cms');
}

?>