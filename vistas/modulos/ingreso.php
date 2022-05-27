

<div class="contenedor">
<h1 class="titulo_pag">
    Ingreso
</h1>


<form method="post" class="ingreso">
    <div>
    <label for="email">Email:</label>
    </div>
    <div>
    <input type="email" id="email" name="ingresoEmail">
    </div>
<div>
<label for="pwd">Contraseña:</label>
</div>
  <div>
  <input type="password" id="pwd" name="ingresoPassword"><br>
  </div>
<div>
<input type="submit" value="Ingresar">
</div>

</form>
</div>

<?php
    $ingreso = new ControladorFormularios();
    $ingreso -> ctrIngreso();
?>