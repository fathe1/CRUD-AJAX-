<?php
include "db_conn.php";

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$first_name = $data['first_name'];
$last_name = $data['last_name'];
$email = $data['email'];
$gender = $data['gender'];

$sql = "UPDATE `crud` SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email', `gender` = '$gender' WHERE `id` = $id";

if (mysqli_query($conn, $sql)) {
    echo json_encode(["message" => "Record updated successfully"]);
} else {
    echo json_encode(["message" => "Error updating record: " . mysqli_error($conn)]);
}
?>
