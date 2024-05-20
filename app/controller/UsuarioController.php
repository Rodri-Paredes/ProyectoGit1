<?php
require_once '../model/Usuario.php'; 

class UsuarioController {
    

    public function registrarUsuario($nombre, $correo, $contrasena) {
 

        $usuario = new Usuario();


        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);


        $resultado = $usuario->registrar($nombre, $correo, $hashed_password);


        return $resultado;
    }


    public function iniciarSesion($correo, $contrasena) {
    
        $usuario = new Usuario();


        $datos_usuario = $usuario->obtenerPorCorreo($correo);

        if ($datos_usuario && password_verify($contrasena, $datos_usuario['contrasena'])) {
 
            $_SESSION['usuario'] = $datos_usuario;
            header('Location: area_usuario.php');
            exit;
        } else {
   
            $_SESSION['error'] = 'Correo electrónico o contraseña incorrectos';
            header('Location: login.php');
            exit;
        }
    }


}
?>
