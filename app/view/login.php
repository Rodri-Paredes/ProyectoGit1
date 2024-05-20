<?php
session_start();
require_once('../../core/connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['contrasena'])) {
            $_SESSION["username"] = $username;
            header("Location: bienvenido.php");
            exit();
        } else {
            $_SESSION['error'] = 'Contraseña incorrecta';
        }
    } else {
        $_SESSION['error'] = 'Usuario no registrado';
    }
}
$conn->close();
?>
