<?php
// dashboard/teacher/index.php
session_start();
if ($_SESSION['role'] !== 'teacher') { header("Location: ../../index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ครู - Quiz System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-3">
<h3>สวัสดีคุณครู: <?= $_SESSION['fullname'] ?></h3>
<ul>
  <li><a href="manage_courses.php">จัดการวิชา</a></li>
  <li><a href="manage_quizzes.php">สร้างแบบทดสอบ</a></li>
  <li><a href="view_results.php">ผลการสอบของนักเรียน</a></li>
</ul>
</body>
</html>