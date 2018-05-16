<?php
date_default_timezone_set('UTC');

function confirmQuery($query_response) {
    global $connection;

    if (!$query_response) {
        die(mysqli_error($connection));
    } else {
        echo "<p>Ok!</p>";
    }
}

?>