<?php
session_start();
include 'db_connect.php';

$event_name = mysqli_real_escape_string($conn, $_POST['event_name'] ?? '');
$event_date = mysqli_real_escape_string($conn, $_POST['event_date'] ?? '');
$venue = mysqli_real_escape_string($conn, $_POST['venue'] ?? '');

$poster = $_FILES['poster']['name'] ?? '';
$tmp_name = $_FILES['poster']['tmp_name'] ?? '';
$size = $_FILES['poster']['size'] ?? 0;
$type = $_FILES['poster']['type'] ?? '';

$allowed_types = array('image/jpeg', 'image/jpg', 'image/png');
$max_size = 2 * 1024 * 1024; // 2MB

if (in_array($type, $allowed_types) && $size <= $max_size) {
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    $file_name = time() . '_' . basename($poster);
    $upload_path = 'uploads/' . $file_name;

    if (move_uploaded_file($tmp_name, $upload_path)) {
        $sql = "INSERT INTO events (event_name, event_date, venue, poster) VALUES ('$event_name', '$event_date', '$venue', '$file_name')";
        mysqli_query($conn, $sql);
    }
}

header("Location: manage_events.php");
exit;
?>
