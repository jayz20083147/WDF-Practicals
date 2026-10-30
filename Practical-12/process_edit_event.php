<?php
session_start();
include 'db_connect.php';

$id = (int)($_POST['id'] ?? 0);
$event_name = mysqli_real_escape_string($conn, $_POST['event_name'] ?? '');
$event_date = mysqli_real_escape_string($conn, $_POST['event_date'] ?? '');
$venue = mysqli_real_escape_string($conn, $_POST['venue'] ?? '');

if ($id > 0) {
    if (!empty($_FILES['poster']['name'])) {
        $poster = $_FILES['poster']['name'];
        $tmp_name = $_FILES['poster']['tmp_name'];
        $size = $_FILES['poster']['size'];
        $type = $_FILES['poster']['type'];

        $allowed_types = array('image/jpeg', 'image/jpg', 'image/png');
        $max_size = 2 * 1024 * 1024;

        if (in_array($type, $allowed_types) && $size <= $max_size) {
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }
            $file_name = time() . '_' . basename($poster);
            $upload_path = 'uploads/' . $file_name;

            if (move_uploaded_file($tmp_name, $upload_path)) {
                $sql = "UPDATE events SET event_name='$event_name', event_date='$event_date', venue='$venue', poster='$file_name' WHERE id=$id";
                mysqli_query($conn, $sql);
            }
        }
    } else {
        $sql = "UPDATE events SET event_name='$event_name', event_date='$event_date', venue='$venue' WHERE id=$id";
        mysqli_query($conn, $sql);
    }
}

header("Location: manage_events.php");
exit;
?>
