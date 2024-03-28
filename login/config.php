<?php
$connection = new mysqli('localhost', 'root', '1482003', 'ltw');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
