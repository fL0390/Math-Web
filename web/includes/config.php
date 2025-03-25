<?php
session_start();
$host = 'localhost';
$dbname = 'math';
$user = 'admin';
$pass = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function require_login() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
}

function require_admin() {
    if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
        header("Location: index.php");
        exit();
    }
}
?>