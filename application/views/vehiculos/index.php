<h1>Listado de Vehiculos recibidos</h1>
<a href="<?php echo site_url('vehiculos/crear'); ?>">Registrar Vehiculo</a>
<table>
    <tr>
        <th>id</th>
        <th>Placa</th>
        <th>modelo</th>
        <th>marca</th>
        <th>color</th>
        <th>Tipo Transmision</th>
        <th>NO VIN</th>
        <th>Cant. puertas</th>
    </tr>
    <?php foreach ($vehiculos as $vehiculo): ?>
    <tr>
        <td><?php echo $vehiculo->id; ?></td>
        <td><?php echo $vehiculo->placa; ?></td>
        <td><?php echo $vehiculo->modelo; ?></td>
        <td><?php echo $vehiculo->marca; ?></td>
        <td><?php echo $vehiculo->color; ?></td>
        <td><?php echo $vehiculo->tipo_transmision; ?></td>
        <td><?php echo $vehiculo->no_vin; ?></td>
        <td><?php echo $vehiculo->cant_puertas; ?></td>
        <td>
            <a href="<?php echo site_url('vehiculos/editar/' . $vehiculo->id); ?>">Editar</a>
            <a href="<?php echo site_url('vehiculos/eliminar/' . $vehiculo->id); ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
