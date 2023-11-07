<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="gallery" >
        <h2>
        Enter the data of the new plate
            
        </h2>
        <hr>
        <form action="/insertnewdish" method="post" enctype="multipart/form-data">
        Dish Name:<br>
        <input type="text" name="name">
        <br>
        Description:<br>
        <textarea name="description" rows="4" cols="50"></textarea>
        <br><br>
        Price:<br>
        <input type="text" name="price">
        <br><br>
        Dish image:<br>
        <input type="file" name="image_dish">
        <br><br>
        <input type="submit" value="Add dish">
        </form>

  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>