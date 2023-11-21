<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php') ?> 

<?php 
include 'db_connect.php';



// Consulta para seleccionar todos los datos de la tabla
$sql = "DELETE FROM dish where ID=$ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$name=$row['name'];
$description=$row['description'];
$price=$row['price'];
$image=$row['image'];
$image=base64_encode($image);
} else {
    echo "0 resultados";
  }
  $conn->close();


  //echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'/></td>";

?> 



  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>