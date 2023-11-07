<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<?php /*
<section class="gallery" >
        <li>
            <a href="/manageourdishes" class="text-blue-500 hover:underline">
            Review all our dishes
            </a>
        </li>
        <li>
            <a href="/manageourdishes" class="text-blue-500 hover:underline">
            Manage our dishes
            </a>
        </li>

  </section>
*/?>

  <ul class="tripList trips">
      <li>
        
        <h3>Review all our dishes</h3>
        
        <a href="/manageourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>
      <li>
        
        <h3>Manage our dishes</h3>
        
        <a href="/manageourdishes">Continue...<i class="fas fa-angle-double-right"></i></a>
      </li>

    </ul>
<?php /*
<section class="gallery" id="gallery">

    <h1>Gallery of our dishes</h1>
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
  */?>
  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>
