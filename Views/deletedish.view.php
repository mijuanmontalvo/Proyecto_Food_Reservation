<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php') ?> 

<?php 
include 'db_connect.php';

echo $ID;

// Consulta para seleccionar todos los datos de la tabla
$sql = "DELETE FROM dish where ID=$ID";
$result = mysqli_query ($conn, $sql);


if ($result) {
    header("Location: /ourdishes");
} else {
    echo "No se pudo borrar";
  }
  $conn->close();


  //echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'/></td>";

?> 



  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>