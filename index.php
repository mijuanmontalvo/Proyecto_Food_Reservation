<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
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
    



    ?>
    <form action="index_process.php" method="post">
    <h1>Log in</h1> 
    <hr>   
        
        <label>User</label>
        <input type="text" name="username" placeholder="Enter your username">
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <hr>
        <button type="submit">Log in</button>
        <a href="/registrarcuenta.php">Create Account</a>
    </form>
</body>
</html>