<?php
include 'db.php';

$id = $_POST['id'];

$query = "DELETE FROM users WHERE id=$id";
if ($conn->query($query)) {
    echo "Usuario eliminado con éxito";
} else {
    echo "Error al eliminar usuario";
}
?>
