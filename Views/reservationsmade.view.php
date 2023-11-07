<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="gallery" >
        <li>
            <a href="/makereservation" class="text-blue-500 hover:underline">
            Add a new reservation
            </a>
        </li>
        <br>
<hr>
<br>
<h2>Your reservation table</h2>
<hr>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>User</th>
    <th>Dish</th>
    <th>Date</th>
    <th>Number Dish</th>
    <th>Observation</th>
    <th>Estate</th>
  </tr>
 
<?php
    $servername = "localhost";
    $username = "food_reservation";
    $password = "1234";
    $dbname = "food_reservation";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
$userID=$_SESSION['ID'];
// Consulta para seleccionar todos los datos de la tabla
$sql = "SELECT 
r.ID as ID,
u.ID as UserID,
u.name as Username, 
d.name as Name_dish, 
r.DateReservation as Date_reservation, 
r.NumberDish as NumberDish, 
r.Observation as Observation,
r.Estate as Estate
FROM reservation r
JOIN user u ON r.UserID = u.id
JOIN dish d ON r.DishID = d.id
WHERE UserID = '$userID'
ORDER BY ID desc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Imprimir los datos en una tabla
  
  while($row = $result->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Username'] . "</td>";
    echo "<td>" . $row['Name_dish'] . "</td>";
    echo "<td>" . $row['Date_reservation'] . "</td>";
    echo "<td>" . $row['NumberDish'] . "</td>";
    echo "<td>" . $row['Observation'] . "</td>";
    echo "<td>" . $row['Estate'] . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 resultados";
}
$conn->close();
?>

</table>

  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>