<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 


  <ul class="tripList trips">
      <li>
        
        <h3>Review all our dishes</h3>
        
        <a href="/manageourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Manage our dishes</h3>
        
        <a href="/manageourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>

    </ul>





    <section class="gallery" >
            <div class="addnewdish">
            <a href="/addnewdish"  class="text-blue-500 hover:underline boton">
            Add a new dish
            </a>
            </div> 

        <br>
<hr>
<br>
<h2>Dish Table</h2>
<hr>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price ($)</th>
    <th>Image</th>
    <th>Operaciones</th>
  </tr>
 
<?php
// Crear conexión
include 'db_connect.php';



// Consulta para seleccionar todos los datos de la tabla
$sql = "SELECT ID, name, description, price, image FROM dish order by ID desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Imprimir los datos en una tabla
  
  while($row = $result->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . number_format($row['price'],2) . "</td>";
    echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'/></td>";
    echo "<td>" ." <a href=/editdish?id=$row[ID]>Edit</a> | <a href=/deletedish>Delete</a>" . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 resultados";
}
$conn->close();
?>

</table>

  </section>


    
<?php 




?>
  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>
