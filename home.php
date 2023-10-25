<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Food reservation</title>
  
  
  
  <!-- load font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- load google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="base.css">

</head>
<body>

  <!-- header / hero -->


  <!-- navigation -->
  <section class="navWrap">
    <img src="images/female-1801515.svg" alt="MAR logo" class="logo">
    <input type="checkbox" id="navToggle" class="navToggle">
    <label for="navToggle" class="navToggleLabel"><span></span></label>
    <nav>
      <ul>
        <li><a href="/home.php">Home</a></li>
        <li><a href="/home.php">About</a></li>
        <li><a href="/reservation.php">Reservation</a></li>
        <li><a href="index.php" class="btn">Log out</output></a></li>
      </ul>
    </nav>
  </section>


  <main>

  <!-- Trips -->
  <section class="trips" id="trips">
    <article>
      <h1>Home</h1>
      <p>Enjoy our delicious dishes</p>
    </article>

  </section>

  <section class="gallery" id="gallery">
    <h1>Below are some of our dishes</h1>
    <div class="galleryWrap">
      <img src="images/vegetable-skewer-3317060_1280.jpg" alt="ocean image">
      <img src="images/food-712665_1280.jpg" alt="ocean image">
      <img src="images/cake-1971552_1280.jpg" alt="ocean image">
      <img src="images/asparagus-2169305_1280.jpg" alt="ocean image">
      <img src="images/olive-oil-968657_1280.jpg" alt="ocean image">
      <img src="images/pizza-3007395_1280.jpg" alt="ocean image">
      <img src="images/pasta-1854245_1280.jpg" alt="ocean image">
      <img src="images/salmon-1238248_1280.jpg" alt="ocean image">

    </div>
  </section>


  
  </main>


  <!-- Footer -->

    <!-- Contact Info -->
    <section class="contactInfo">
      <article>
        <h4>Contact Information</h4>
        <ul>
          <li>Phone: 123-456-7890</li>
          <li>Email: info@foodreservation.com</li>
          <li>Address: 1234 Ocean Ave. Jhon, CA 12345</li>
        </ul>
        <p class="copy">FOOD-RESERVATION &copy;2023</p>
      </article>
    </section>
  </footer>
</body>
</html>
