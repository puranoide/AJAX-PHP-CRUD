<?php
include 'db.php';

$id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if ($id) {
    // Actualizar usuario existente
    $query = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($query)) {
        echo "Usuario actualizado con éxito";
    } else {
        echo "Error al actualizar usuario";
    }
} else {
    // Insertar nuevo usuario
    $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($query)) {
        echo "Usuario agregado con éxito";
    } else {
        echo "Error al agregar usuario";
    }
}
?>
