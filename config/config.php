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
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ✅ Correct usage
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
