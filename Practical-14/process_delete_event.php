<?php
session_start();
include 'db_connect.php';

$id = (int)($_GET['id'] ?? 0);

if ($id > 0) {
    // Retrieve poster file to delete from disk
    $res = mysqli_query($conn, "SELECT poster FROM events WHERE id = $id");
    if ($row = mysqli_fetch_assoc($res)) {
        if (!empty($row['poster']) && file_exists('uploads/' . $row['poster'])) {
            unlink('uploads/' . $row['poster']);
        }
    }

    $sql = "DELETE FROM events WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("Location: manage_events.php");
exit;
?>
