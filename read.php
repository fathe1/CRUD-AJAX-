<?php
include 'db_conn.php';

$result = $conn->query("SELECT * FROM records");
$records = [];

while ($row = $result->fetch_assoc()) {
    $records[] = $row;
}

echo json_encode($records);
$conn->close();
?>
