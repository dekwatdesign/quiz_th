<?php
// dashboard/admin/index.php
session_start();
if ($_SESSION['role'] !== 'admin') { header("Location: ../../index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ผู้ดูแลระบบ - Quiz System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-3">
<h3>ยินดีต้อนรับ Admin: <?= $_SESSION['fullname'] ?></h3>
<ul>
  <li><a href="../teacher/manage_courses.php">จัดการวิชา</a></li>
  <li><a href="../teacher/manage_quizzes.php">สร้างแบบทดสอบ</a></li>
  <li><a href="manage_users.php">จัดการบัญชีผู้ใช้</a></li>
  <li><a href="view_logs.php">ดู Log ระบบ</a></li>
</ul>
</body>
</html>
