<?php
include 'db.php';

$id = $_POST['id'];

$query = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo json_encode($user);
} else {
    echo json_encode([]);
}
?>
