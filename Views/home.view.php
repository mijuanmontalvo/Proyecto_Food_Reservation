<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="gallery" >


        <ul class="tripList trips">
        <?php
        if ($_SESSION['UserType']=="Kitchen"){
        ?>

      <li>
        
        <h3>Our Dishes</h3>
        <p>In this section of our application you can review the list of our dishes available to guests, you can also create new dishes, edit dishes and/or delete dishes.</p>
        <a href="/ourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Reservations</h3>
        <p>In this section of our application you can review all guest reservations previously made, you can also edit those reservations and/or delete those reservations.</p>
        <a href="/reservation">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
<?php
        } else {

?>
      <li>
        
        <h3>Our Dishes</h3>
        <p>In this section of our application you can review the list of dishes at your disposal, you can also select a dish and reserve it so you can enjoy it on your preferred date and time.</p>
        <a href="/ourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Reservations</h3>
        <p>In this section of our application you can review all your previously made reservations, you can also create new reservations, edit your reservations and/or delete your reservations.</p>
        <a href="/reservation">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>


<?php
        }

?>




    </ul>

  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>
