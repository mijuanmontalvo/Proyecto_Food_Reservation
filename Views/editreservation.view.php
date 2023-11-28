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
$sql = "SELECT ID, UserID, DishID, DateReservation, NumberDish, Observation, Estate 
        FROM reservation 
        where ID=$ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

$UserID=$row['UserID'];
$DishID=$row['DishID'];
$DateReservation=$row['DateReservation'];
$NumberDish=$row['NumberDish'];
$Observation=$row['Observation'];
$Estate=$row['Estate'];
//$image=base64_encode($image);
//echo $ID.$UserID.$DateReservation.$NumberDish.$Observation.$Estate;


$sql1 = "SELECT ID, Name FROM dish where ID = $DishID";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    $row1 = $result1->fetch_assoc();
  // echo $row1["Name"];

}


} else {
    echo "0 resultados";
  }




  $conn->close();


  //echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "'/></td>";




?> 

<section class="gallery" >

        <a style="text-align: end; display: inline-block; width: 100%; " href="/reservation"><< Back</a> 
<br>
<br> 
<hr>
  
      <h2>Enter the new details of your reservation</h2>
      <hr>
      <br>

<?php
      if ($_SESSION['UserType']=="Kitchen"){
  ?>
      <form action="inserteditreservation" method="post">
      <input type="hidden" name="ID" value="<?php echo $ID;?>">
      <input type="hidden" name="UserID" value="<?php echo $UserID;?>">
        <br>
      <label for="plato">Name of dish:</label><br>
    <select id="name_dish" name="name_dish">
        <!-- Opciones de platos se pueden cargar dinámicamente desde la base de datos -->
        <?php
        // Mostrar las opciones de platos en el select
        include 'db_connect.php';
        $sql2 = "SELECT ID, Name FROM dish";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {

            echo '<option value="' . $row1["ID"] . '">' . $row1["Name"] . '</option>';
            while ($row2 = $result2->fetch_assoc()) {
                echo '<option value="' . $row2["ID"] . '">' . $row2["Name"] . '</option>';
            }
            
        }
        ?>
    </select><br><br>

    <label for="fecha">Reservation Date and Time:</label><br>
    <input type="datetime-local" id="reservation_date" name="reservation_date" value="<?php echo $DateReservation;?>".><br><br>

    <label for="cantidad">Number of dishes:</label><br>
    <input type="number" id="number_dishes" name="number_dishes" min="1" value="<?php echo $NumberDish;?>" required><br><br>

    <label for="observacion">Observation:</label><br>
    <textarea id="observation" name="observation" rows="4" cols="50"><?php echo $Observation;?></textarea><br><br>

    <select id="estate" name="estate">
        <!-- Opciones de platos se pueden cargar dinámicamente desde la base de datos -->
        <?php
        // Mostrar las opciones de platos en el select
        

          echo '<option value="' . $Estate. '">' . $Estate . '</option>';
          echo '<option value="Initialized">Initialized</option>'; 
          echo '<option value="Attended">Attended</option>';
        ?>
    </select><br><br>

    <input type="submit" value="Update Reservation">
</form>
<?php
} else{
  
  ?>

<form action="inserteditreservation" method="post">
      <input type="hidden" name="ID" value="<?php echo $ID;?>">
      <input type="hidden" name="UserID" value="<?php echo $UserID;?>">
        <br>
      <label for="plato">Name of dish:</label><br>
    <select id="name_dish" name="name_dish">
        <!-- Opciones de platos se pueden cargar dinámicamente desde la base de datos -->
        <?php
        // Mostrar las opciones de platos en el select
        include 'db_connect.php';
        $sql2 = "SELECT ID, Name FROM dish";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {

            echo '<option value="' . $row1["ID"] . '">' . $row1["Name"] . '</option>';
            while ($row2 = $result2->fetch_assoc()) {
                echo '<option value="' . $row2["ID"] . '">' . $row2["Name"] . '</option>';
            }
            
        }
        ?>
    </select><br><br>

    <label for="fecha">Reservation Date and Time:</label><br>
    <input type="datetime-local" id="reservation_date" name="reservation_date" value="<?php echo $DateReservation;?>".><br><br>

    <label for="cantidad">Number of dishes:</label><br>
    <input type="number" id="number_dishes" name="number_dishes" min="1" value="<?php echo $NumberDish;?>" required><br><br>

    <label for="observacion">Observation:</label><br>
    <textarea id="observation" name="observation" rows="4" cols="50"><?php echo $Observation;?></textarea><br><br>

    <input type="submit" value="Update Reservation">
</form>


<?php
    }
?>
  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>