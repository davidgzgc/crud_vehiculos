<h1>Agregar Vehiculo</h1>
<form action="<?php echo site_url('vehiculos/crear'); ?>" method="post">
    <div>

    <label for="placa">placa:</label>
    <input type="text" name="placa" required>

    </div><br>

    <div>  

    <label for="modelo">modelo:</label>
    <input type="text" name="modelo" required>

    </div><br>

    <div>

    <label for="marca">marca:</label>
    <input type="text" name="marca" required>

    </div><br>

    <div>

    <label for="color">color:</label>
    <input type="text" name="color" required>


    </div><br>

  <div>

  <label for="tipo_transmision">Tipo Transmision:</label>
  <input type="text" name="tipo_transmision" required>

  </div><br>

   <div>

   <label for="no_vin">NO VIN:</label>
   <input type="text" name="no_vin" required>


   </div><br>

  <div>

  <label for="cant_puertas">cant.puertas:</label>
  <input type="text" name="cant_puertas" required>


  </div><br>
    

<div>

<label for="combustible">combustible</label>
<input type="text" name="combustible" required> 


</div><br>

    <input type="submit" value="Crear vehiculos">
</form>
