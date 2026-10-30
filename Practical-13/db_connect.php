<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studenthub_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Database Connection Failed: " . $conn->connect_error]);
    exit;
}
?>
