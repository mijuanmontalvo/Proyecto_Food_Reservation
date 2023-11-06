<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Food reservation</title>

  <link rel="stylesheet" href="css/base.css">

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
        <li><a href="home">Home</a></li>
        <li><a href="home">About</a></li>
        <li><a href="reservation">Reservation</a></li>
        <li><a href="/" class="btn">Log out</output></a></li>
      </ul>
    </nav>
  </section>


  <main>

  <!-- Trips -->
  <section class="trips" id="trips">
    <article>
      <h1>Make your Reservation</h1>
      <p>Please add your reservaion and select your favarite dish.</p>
    </article>
    <h3>Reservation details</h3>
      
    
      <form action="/reservationsmade.php" method="post" id="contactForm" class="contactForm">
        <div>
          <label for="fullName">Dish:</label>
          <input type="text" name="fullName" id="fullName" required>
        </div>
    
        <div>
          <label for="phone">Date:</label>
          <input type="tel" name="phone" id="phone" maxlength="12" placeholder="10/31/2023" required>
        </div>
    
        <div>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
    
        <div class="radioBtns">
          <p>Meal time:</p>
          <label for="contactEmail">
            <input type="radio" name="contact" id="contactEmail" value="email">
            <span></span>
            Breakfast
          </label>
    
          <label for="contactTel">
            <input type="radio" name="contact" id="contactTel" value="phone">
            <span></span>
            Lonch
          </label>
    
          <label for="contactText">
            <input type="radio" name="contact" id="contactText" value="text">
            <span></span>
            Dinner
          </label>
          <label for="contactText">
            <input type="radio" name="contact" id="contactText" value="text">
            <span></span>
            Other
          </label>
        </div>
    
        <div>
          <label for="msg">Observations / Questions:</label>
          <textarea name="msg" id="msg"></textarea>
        </div>
    
      
    
        <button  type="submit" value="Send Message" form="contactForm">Acept </button>
      </form>
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