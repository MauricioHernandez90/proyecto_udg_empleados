<?php 
    $usuario = ControladorFormularios::ctrSeleccionarRegistros(null,null);
?>

<div class="contenedor">
<h1 class="titulo_pag">Reporte</h1>


<table class="reporte">
    <thead>
        <tr>
            <th>#</th>;
            <th>ID</th>
            <th>nombre</th>
            <th>Email</th>
            <th>RFC</th>
            <th>CURP</th>
            <th>SALARIO</th>
            <th>Teléfono</th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuario as $key => $value){?> 
        <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $value["ID"];?></td>
            <td><?php echo $value["nombre"];?></td>
            <td><?php echo $value["correo"];?></td>
            <td><?php echo $value["rfc"];?></td>
            <td><?php echo $value["curp"];?></td>
            <td><?php echo $value["salario"];?></td>
            <td><?php echo $value["telefono"];?></td>
            <td>
                <button>Editar</button>
                <button method="post" name="eliminar" action="">Eliminar</button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
