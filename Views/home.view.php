<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="gallery" >


        <ul class="tripList trips">
      <li>
        
        <h3>Our Dishes</h3>
        <p>Here you can check our dishes</p>
        <a href="/ourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Reservations</h3>
        <p>Here you can do a reservation and you can review all your reservations.</p>
        <a href="/reservation">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>

    </ul>

  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>
