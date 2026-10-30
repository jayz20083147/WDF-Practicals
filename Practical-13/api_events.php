<?php
header("Content-Type: application/json");
include 'db_connect.php';

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

if ($method == 'GET') {
    $sql = "SELECT id, event_name, event_date, venue FROM events ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $events = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }
    echo json_encode($events);
}
elseif ($method == 'POST') {
    $name = mysqli_real_escape_string($conn, $input['event_name'] ?? '');
    $date = mysqli_real_escape_string($conn, $input['event_date'] ?? '');
    $venue = mysqli_real_escape_string($conn, $input['venue'] ?? '');

    $sql = "INSERT INTO events (event_name, event_date, venue) VALUES ('$name', '$date', '$venue')";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(["status" => "success", "id" => mysqli_insert_id($conn)]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
    }
}
elseif ($method == 'PUT') {
    $id = (int)($input['id'] ?? 0);
    $name = mysqli_real_escape_string($conn, $input['event_name'] ?? '');
    $date = mysqli_real_escape_string($conn, $input['event_date'] ?? '');
    $venue = mysqli_real_escape_string($conn, $input['venue'] ?? '');

    $sql = "UPDATE events SET event_name='$name', event_date='$date', venue='$venue' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(["status" => "success"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
    }
}
elseif ($method == 'DELETE') {
    $id = (int)($_GET['id'] ?? 0);

    $sql = "DELETE FROM events WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(["status" => "success"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
    }
}
?>
