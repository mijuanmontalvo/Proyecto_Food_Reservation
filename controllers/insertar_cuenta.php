<?php
session_start();
include '../functions.php';
$conn = conectarBD();

$type_user = $_POST['type_user'];
$name_usuario = $_POST['name_usuario'];
$room_number = $_POST['room_number'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

// Ejecutar una consulta (query) simple
$sql = "INSERT INTO food_reservation.user (UserType, Name, RoomNumber, email, UserName, Password) 
        values('$type_user','$name_usuario','$room_number','$email','$user_name','$password')";

if ($conn->query($sql) === TRUE) {
    // Redireccionar a la página de inicio de sesión
    $_SESSION['name_usuario'] = $name_usuario;
    header("Location: /home");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


/*if ($result->num_rows > 0) {
  // Mostrar los datos de cada fila
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - ID: " . $row["id"]."<br>";
  }
} else {
  echo "0 resultados";
}*/

// Cerrar la conexión
$conn->close();
?>