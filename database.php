<?php

$dbname="help";
$link= mysqli_connect('localhost', 'root', '');

if(!$link)
{
	die('could not connect');
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($link, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $link->error;
}

$link->close();
?>