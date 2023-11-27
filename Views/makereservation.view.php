<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="gallery" id="trips">


<?php
$actual_date = date('Y-m-d\TH:i');
// Establecer la conexión con la base de datos (reemplazar con tus propias credenciales)
include 'db_connect.php';

// Consulta para seleccionar todos los platos de la base de datos
$sql = "SELECT ID, Name FROM dish";
$result = $conn->query($sql);



?>
  <a style="text-align: end; display: inline-block; width: 100%; " href="/reservation"><< Back</a> 
<br>
<br> 
<hr>
  
      <h2>Enter your reservation details</h2>
      <hr>
      <br>
      <form action="/controllers/insertar_reservation.php" method="post">
      <label for="plato">Name of dish:</label><br>
    <select id="name_dish" name="name_dish">
        <!-- Opciones de platos se pueden cargar dinámicamente desde la base de datos -->
        <?php
        // Mostrar las opciones de platos en el select
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["ID"] . '">' . $row["Name"] . '</option>';
            }
        }
        ?>
    </select><br><br>

    <label for="fecha">Reservation Date and Time:</label><br>
    <input type="datetime-local" id="reservation_date" name="reservation_date" value="<?php echo $actual_date;?>"><br><br>

    <label for="cantidad">Number of dishes:</label><br>
    <input type="number" id="number_dishes" name="number_dishes" min="1" value="1" required><br><br>

    <label for="observacion">Observation:</label><br>
    <textarea id="observation" name="observation" rows="4" cols="50"></textarea><br><br>



    <input type="submit" value="Reserve">
</form>

  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>