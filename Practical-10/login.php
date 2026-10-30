<?php
session_start();
include 'db_connect.php';

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!empty($email) && !empty($password)) {
    $stmt = $conn->prepare("SELECT id, name, email, password_hash, role FROM students WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password_hash'])) {
            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);

            $_SESSION['student_id'] = $row['id'];
            $_SESSION['student_name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['last_activity'] = time();

            // Optional secure Remember-Me cookie (valid for 30 days)
            if (!empty($_POST['remember'])) {
                setcookie("remember_me", $row['email'], time() + (86400 * 30), "/");
            }

            // Role-based redirection
            if ($_SESSION['role'] === 'admin') {
                header("Location: ../Practical-14/admin_dashboard.php");
            } else {
                header("Location: home.php");
            }
            exit;
        }
    }
    $stmt->close();
}

header("Location: login.html?error=invalid");
exit;
?>
