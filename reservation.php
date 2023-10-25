<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Food reservation</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/favicon.png">
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
        <li><a href="/home">About</a></li>
        <li><a href="/reservation.php">Reservation</a></li>
        <li><a href="/index.php" class="btn">Log out</output></a></li>
      </ul>
    </nav>
  </section>


  <main>

  <!-- Trips -->
  <section class="trips" id="trips">
    <article>
      <h1>RESERVATIONS</h1>
      <p>You can make a reservation for our food or review your reservations already made</p>
    </article>
    <ul class="tripList">
      <li>
        
        <h3>Make a reservation</h3>
        <p>Here you can make reservations for your favorite meals within our kitchen hours.</p>
        <a href="/makereservation.php">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Check your reservations</h3>
        <p>Here you can review all the reservations you have with us, your order, date and time are included here.</p>
        <a href="/reservationsmade.php">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>

    </ul>
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