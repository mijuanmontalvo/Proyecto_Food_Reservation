<?php
session_start();
//include '../functions.php';
$conn = conectarBD();

$ID=$_POST['ID'];
$userID=$_POST['UserID'];
$name_dish = $_POST['name_dish'];
$reservation_date = $_POST['reservation_date'];
$number_dishes = $_POST['number_dishes'];
$observation = $_POST['observation'];
$estate=$_POST['estate'];

//echo $estate.$ID." ".$userID." ".$name_dish." ".$reservation_date." ".$number_dishes." ".$observation." ".$estate;

if ($_SESSION['UserType']=="Kitchen"){
        $sql = "UPDATE food_reservation.reservation 
        SET DishID=$name_dish, DateReservation= '$reservation_date', NumberDish= $number_dishes,  
        Observation='$observation', Estate='$estate'
        WHERE ID=$ID";
      } else{

// Ejecutar una consulta (query) simple
          $sql = "UPDATE food_reservation.reservation 
          SET DishID=$name_dish, DateReservation= '$reservation_date', NumberDish= $number_dishes,  
          Observation='$observation'
          WHERE ID=$ID";

          }

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