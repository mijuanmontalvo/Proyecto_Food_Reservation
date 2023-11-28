<?php
session_start();
include '../functions.php';
$conn = conectarBD();

$userID=$_SESSION['ID'];

$name_dish = $_POST['name_dish'];
$reservation_date = $_POST['reservation_date'];
$number_dishes = $_POST['number_dishes'];
$observation = $_POST['observation'];
$estate="Initialized";

// Ejecutar una consulta (query) simple
$sql = "INSERT INTO food_reservation.reservation (UserID, DishID, DateReservation, NumberDish, Observation, Estate) 
        values('$userID','$name_dish','$reservation_date','$number_dishes','$observation','$estate')";

if ($conn->query($sql) === TRUE) {
    // Redireccionar a la página de inicio de sesión
    header("Location: /reservation");
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