<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food reservation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
   // session_start();
    /*
echo "Test :<br />";
$user_password="1111";
echo "Password of test is: $user_password<br />";


// For hashing the password before storing it 
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT); 
echo "Encrypted password: $hashed_password<br />"; 

$hashed_password_from_database = '$2y$10$KzAPzM2R9Boc/Za6nGiZKuxY9c02ccwL5uYgWyya.b2mFqPzSf1wK';

// Example of a password entered by the user during login
$user_input_password = 'user_password';

// Verify if the entered password matches the hashed password from the database
if (password_verify($user_input_password, $hashed_password_from_database)) {
    // Password is correct
    echo "Password is correct. Granting access to the system.";
} else {
    // Password is incorrect
    echo "Password is incorrect. Access denied.";
}
    

*/

    ?>
    <form name="frmLogin" method="post">
    <h1>Log in</h1> 
    <hr>   
        
        <label>User</label>
        <input type="text" name="username" placeholder="Enter your username">
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <hr>
        <button type="submit">Log in</button>
        <a href="registrarcuenta">Create Account</a>
    </form>
    </body>
</html>

<?php
/*
$username = $_POST['username'];
$password = $_POST['password'];
if ($usuario=="")
{
     echo "Ingrese su nombre de usuario y su contrase�a";
}
else
{
    include '../functions.php';
    $conn = conectarBD();

    $sql="SELECT * FROM food_reservation.user where UserName = '$username' and Password = '$password' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
       {
        $_SESSION['name_usuario'] = $username;
        echo $_SESSION['name_usuario'];

        }
     else
        {
          ?>
          <script language="javascript">
          alert("El usuario y/o la contrase�a no son validos");
          </script>
          <?
          //$usuario=md5($usuario);
          echo "Ingrese su nombre de usuario y su contrase�a";
        }
}*/
?>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "food_reservation";
    $password = "1234";
    $dbname = "food_reservation";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM food_reservation.user where UserName = '$username' and Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; // Almacenar nombre de usuario en la sesión
        header("location: /home ");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
        echo "<script>window.location.href = '/';</script>";

    }

    $conn->close();
}
?>
