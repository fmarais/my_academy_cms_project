<?php

$connection = mysqli_connect('localhost', 'dev', 'pass', 'my_academy_cms');

if ($connection) {
    echo 'mysql OK!';
}