<?php
session_start();

if (!isset($_SESSION["student_id"])) {
    // If not logged in, allow demo or redirect to Practical-10 login
    if (file_exists("../Practical-10/login.html")) {
        header("Location: ../Practical-10/login.html");
    } else {
        header("Location: login.html");
    }
    exit;
}

$timeout_duration = 1800;

if (isset($_SESSION["last_activity"])) {
    if (time() - $_SESSION["last_activity"] > $timeout_duration) {
        session_unset();
        session_destroy();
        header("Location: ../Practical-10/login.html?timeout=1");
        exit;
    }
}

$_SESSION["last_activity"] = time();
?>
