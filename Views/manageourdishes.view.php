<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="gallery" >
        <li>
            <a href="/addnewdish" class="text-blue-500 hover:underline">
            Add a new dish
            </a>
        </li>
        <li>
            <a href="/manageourdishes" class="text-blue-500 hover:underline">
            Edit a dish
            </a>
        </li>
        <li>
            <a href="/manageourdishes" class="text-blue-500 hover:underline">
            Delete a dish
            </a>
        </li>

  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>