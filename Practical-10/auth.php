<?php
session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.html");
    exit;
}

$timeout_duration = 1800; // 30 minutes in seconds

if (isset($_SESSION["last_activity"])) {
    if (time() - $_SESSION["last_activity"] > $timeout_duration) {
        session_unset();
        session_destroy();
        setcookie("remember_me", "", time() - 3600, "/");
        header("Location: login.html?timeout=1");
        exit;
    }
}

$_SESSION["last_activity"] = time();
?>
