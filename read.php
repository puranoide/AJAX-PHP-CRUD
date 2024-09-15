<?php
include 'db.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>
                <button class='editUser' data-id='{$row['id']}'>Editar</button>
                <button class='deleteUser' data-id='{$row['id']}'>Eliminar</button>
            </td>
        </tr>
        ";
    }
} else {
    echo "<tr><td colspan='5'>No hay usuarios registrados</td></tr>";
}
?>
