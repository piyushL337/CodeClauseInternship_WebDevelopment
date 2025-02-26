<?php
$host = 'sql306.hstn.me';
$dbname = 'mseet_38268059_imgallery';
$user = 'mseet_38268059';
$pass = 'India7890';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
