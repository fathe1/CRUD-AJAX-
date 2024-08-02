<?php
include 'db_conn.php';

$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];

$stmt = $conn->prepare("INSERT INTO records (name, email, phone, address) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $address);
$stmt->execute();
$stmt->close();
$conn->close();
?>
