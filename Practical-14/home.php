<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Portal | StudentHub</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand">
      <div class="logo">➵</div>
      <div>
        <h1>StudentHub</h1>
        <p class="tagline">Welcome, <?= htmlspecialchars($_SESSION['student_name'] ?? 'Student') ?></p>
      </div>
    </div>
    <nav class="site-nav">
      <a href="home.php" class="active">Home</a>
      <a href="course.html">Courses</a>
      <a href="logout.php" class="btn" style="background:#e74c3c;">Logout</a>
    </nav>
  </header>

  <main class="container">
    <div class="card">
      <h2>Student Home Dashboard</h2>
      <p>Welcome to the StudentHub portal. Here you can access your enrolled courses and view student notices.</p>
      <div style="margin-top:20px;">
        <a href="course.html" class="btn">View Enrolled Courses</a>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <p>&copy; 2026 StudentHub. All rights reserved.</p>
  </footer>
</body>
</html>
