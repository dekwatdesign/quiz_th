<?php
// index.php - หน้า Login หลักของระบบ
session_start();
if (isset($_SESSION['role'])) {
    header("Location: dashboard/{$_SESSION['role']}/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เข้าสู่ระบบ - Quiz System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
    .login-box { max-width: 400px; margin: 100px auto; padding: 30px; background: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
  </style>
</head>
<body>
<div class="login-box">
  <h4 class="text-center">เข้าสู่ระบบ</h4>
  <?php if (!empty($_GET['error'])): ?>
    <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
  <?php endif; ?>
  <form action="login.php" method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">ชื่อผู้ใช้</label>
      <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">รหัสผ่าน</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
  </form>
</div>
</body>
</html>