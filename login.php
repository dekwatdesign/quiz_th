<?php
// login.php - ตรวจสอบการเข้าสู่ระบบ
require 'includes/db.php';
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['fullname'] = $user['fullname'];
    header("Location: dashboard/{$user['role']}/index.php");
} else {
    header("Location: index.php?error=ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");
}
exit();