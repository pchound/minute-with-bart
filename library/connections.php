<?php
function bartConnect()
{
    // Database configuration
    $servername = "localhost";
    $username = "test_admin";
    $password = "abc123";
    $database = "minute_with_bart";

    // Create PDO connection
    $dsn = "mysql:host=$servername;dbname=$database";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    try {
        $pdo = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
