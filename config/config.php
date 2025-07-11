<?php

// host
$host = 'localhost';

// dbname
$dbname = 'bookshop-simple';

// username
$username = 'root';

// password
$password = '';

// connect to the database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

