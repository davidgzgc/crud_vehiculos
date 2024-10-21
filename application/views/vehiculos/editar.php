<h1>Vehiculo</h1>
<form action="<?php echo site_url('vehiculos/editar/' . $vehiculo->id); ?>" method="post">
    <label for="placa">placa:</label>
    <input type="text" name="placa" value="<?php echo $vehiculo->placa; ?>" required>


    <label for="modelo">modelo:</label>
    <input type="text" name="modelo" value="<?php echo $vehiculo->modelo; ?>" required>

    <label for="marca">marca:</label>
    <input type="text" name="marca" value="<?php echo $vehiculo->marca; ?>" required>

    
    <label for="color">color:</label>
    <input type="text" name="color" value="<?php echo $vehiculo->color; ?>" required>


    <label for="tipo_transmision">tipo_transmision:</label>
    <input type="text" name="tipo_transmision" value="<?php echo $vehiculo->tipo_transmision; ?>" required>

    <label for="no_vin">no_vin:</label>
    <input type="text" name="no_vin" value="<?php echo $vehiculo->no_vin; ?>" required>



        
    <label for="cant_puertas">cant_puertas:</label>
    <input type="text" name="cant_puertas" value="<?php echo $vehiculo->cant_puertas; ?>" required><br>
    
    
    <input type="submit" value="Actualizar vehiculo"><br>
</form>
