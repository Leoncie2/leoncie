<?php
$host = getenv('DB_HOST') ?: '202412345-db';
$dbname = getenv('DB_NAME') ?: '202412345_shareride_db';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>