<?php require('partials/head.php')?> 

  <!-- header / hero -->


  <!-- navigation -->
  <?php require('partials/nav.php')?> 



  <!-- Trips -->
  <?php require('partials/banner.php')?> 
  <ul class="tripList trips">
      <li>
        
        <h3>Make a reservation</h3>
        <p>Here you can make reservations for your favorite meals within our kitchen hours.</p>
        <a href="makereservation">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Check your reservations</h3>
        <p>Here you can review all the reservations you have with us, your order, date and time are included here.</p>
        <a href="reservationsmade">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>

    </ul>


    <section class="gallery" >

<?php
if ($_SESSION['UserType']=="Kitchen"){

} else {

  ?>
  <div class="addnewdish">
  <a href="/makereservation"  class="text-blue-500 hover:underline boton">
  Add a new reservation
  </a>
  </div> 

  <?php

}
?>

    <br>
<hr>
<br>
<h2>Reservations Table</h2>
<hr>
<table style="width:100%">
  <tr>
    <th>User</th>
    <th>Dish</th>
    <th>Date</th>
    <th>Number of Dishes</th>
    <th>Observation</th>
    <th>Estate</th>
    <th>Operations</th>
  </tr>

<?php
// Crear conexión
include 'db_connect.php';
//echo $_SESSION['UserType'];


$userID=$_SESSION['ID'];
// Consulta para seleccionar todos los datos de la tabla
if ($_SESSION['UserType']=="Kitchen"){
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
  ORDER BY ID desc;";
} else {

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
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Imprimir los datos en una tabla
  
  while($row = $result->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" . $row['Username'] . "</td>";
    echo "<td>" . $row['Name_dish'] . "</td>";
    echo "<td>" . $row['Date_reservation'] . "</td>";
    echo "<td>" . $row['NumberDish'] . "</td>";
    echo "<td>" . $row['Observation'] . "</td>";
    echo "<td>" . $row['Estate'] . "</td>";
    echo "<td>" ." <a href=/editreservation?id=$row[ID]>Edit</a> | 
                  <a href=/deletereservation?id=$row[ID] class=table__item__link>Delete</a>" . "</td>";

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