<?php
require_once '../core/connection.php'; 

class UsuarioModel {
    
 
    public function registrarUsuario($nombre, $correo, $contrasena) {
        global $conn; 

        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");


        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $correo);
        $stmt->bindParam(3, $contrasena);


        $stmt->execute();


        return $stmt->rowCount() > 0;
    }

    public function obtenerUsuarioPorCorreo($correo) {
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = ?");

  
        $stmt->bindParam(1, $correo);

 
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


}
?>
