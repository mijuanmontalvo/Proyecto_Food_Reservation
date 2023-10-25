<?php


// Verificar si se han enviado datos desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí deberías verificar los datos del usuario y contraseña con tu lógica de autenticación
    $usuario_valido = "username"; // Aquí reemplaza con el nombre de usuario válido
    $contrasena_valida = "password"; // Aquí reemplaza con la contraseña válida
  
    // Obtener los datos enviados desde el formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    // Verificar si el usuario y la contraseña son correctos
    if ($username === $usuario_valido && $password === $contrasena_valida) {
        // Si son correctos, redirigir a una página de bienvenida
        header("Location: home.php");
        exit;
    } else {
        // Si no son correctos, mostrar un mensaje de alerta
        echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
        
    }
  }
?>