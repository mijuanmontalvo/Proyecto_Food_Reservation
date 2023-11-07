<?php //session_start();?> 
<?php require('partials/head.php')?> 
  <!-- header / hero -->
  <!-- navigation -->
<?php require('partials/nav.php')?> 
  <!-- Trips -->
<?php require('partials/banner.php')?> 
<section class="trips" id="trips">
    
      <h2>Enter your reservation details</h2>

<form action="procesar_reserva.php" method="post">
  <label for="nombre_usuario">Nombre de Usuario:</label><br>
  <input type="text" id="nombre_usuario" name="nombre_usuario"><br><br>

  <label for="fecha_reserva">Fecha de Reserva:</label><br>
  <input type="datetime-local" id="fecha_reserva" name="fecha_reserva"><br><br>

  <label for="cantidad_platos">Cantidad de Platos:</label><br>
  <input type="number" id="cantidad_platos" name="cantidad_platos" min="1" value="1"><br><br>

  <label for="platos_reservados">Platos Reservados:</label><br>
  <div id="platos">
    <input type="text" name="platos[]" placeholder="Nombre del Plato"><br><br>
  </div>
  <button type="button" onclick="agregarPlato()">Agregar Plato</button><br><br>

  <input type="submit" value="Enviar Reservación">
</form>

<script>
  function agregarPlato() {
    var div = document.createElement('div');
    div.innerHTML = '<input type="text" name="platos[]" placeholder="Nombre del Plato"><br><br>';
    document.getElementById('platos').appendChild(div);
  }
</script>
  </section>


  <!-- Footer -->
<!-- Contact Info -->
<?php //require('partials/footer.contact.php')?>
<?php require('partials/footer.php')?>