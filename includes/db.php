<?php
// includes/db.php - การเชื่อมต่อฐานข้อมูล
$pdo = new PDO("mysql:host=localhost;dbname=quiz_system;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* ---------------- หน้า Dashboard สำหรับแต่ละสิทธิ์ ---------------- */
// dashboard/student/index.php
session_start();
if ($_SESSION['role'] !== 'student') { header("Location: ../../index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>นักเรียน - Quiz System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-3">
<h3>สวัสดีคุณนักเรียน: <?= $_SESSION['fullname'] ?></h3>
<ul>
  <li><a href="courses.php">สมัครเรียนวิชา</a></li>
  <li><a href="quizzes.php">ทำแบบทดสอบ</a></li>
  <li><a href="results.php">ดูผลการสอบ</a></li>
</ul>
</body>
</html>