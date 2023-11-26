<?php
session_start();
include 'db_connect.php';



$ID = $_POST['ID'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

 if (empty($_FILES['image_dish']['name'])){

    //echo "la imagen es cero";
    $sql = "UPDATE food_reservation.dish 
    SET Name='$name', Description='$description', Price=$price
    WHERE ID=$ID";

}else{
    $image_dish = addslashes(file_get_contents($_FILES['image_dish']['tmp_name']));
    $sql = "UPDATE food_reservation.dish 
    SET Name='$name', Description='$description', Price=$price, Image='$image_dish'
    WHERE ID=$ID";  
}

//echo $image_dish;

// Ejecutar una consulta (query) simple

$result = $conn->query($sql);

/*
if ($conn->query($sql) === TRUE) {
    // Redireccionar a la página de inicio de sesión

    header("Location: /ourdishes");
    echo "exito";
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }*/

  if ($result) {
   // echo "<script>alert('Se han guardado los cambios correctamente, actualice La p\u@0Elgina para ver los cambios'); window.location='/ourdishes';</script>";
    echo "<script>alert('Changes have been saved correctly.');</script>";
    echo "<script>window.location.href = '/ourdishes';</script>";
    exit();
    
    } else {
    echo "<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
    
    }


$conn->close();
?>