<section class="contenedor" >
    <h1 class="titulo_pag">Registrar Empleado Nuevo</h1>

    <form method="post" class="registro">
        <div>
        <label class="label" for="nombre">Nombre:</label>
        </div>
        <div>
        <input type="text" name="registroName" id="nombre">
        </div>
        <div>
        <label class="label" for="apellido">Apellido:</label>
        </div>
        <div>
        <input type="text" name="registroApellido" id="apellido">
        </div>
        <div>
        <label class="label" for="password">Contraseña:</label>
        </div>
        <div>
        <input type="password" name="registroPsw" id="password">
        </div>
        <div>
        <label class="label" for="email">Email:</label>
        </div>
        <div>
        <input  type="email" name="registroEmail" id="email" >
        </div>
        <label class="label" for="RFC">RFC:</label>
        </div>
        <div>
        <input  type="text" name="registroRfc" id="rfc" >
        </div>
        <label class="label" for="RFC">CURP:</label>
        </div>
        <div>
        <input  type="text" name="registroCurp" id="curp" >
        </div>
        <label class="label" for="salario">Salario:</label>
        </div>
        <div>
        <input  type="number" name="registroSalario" id="salario" >
        </div>

        </div>
        <label class="label" for="telefono">Teléfono:</label>
        </div>
        <div>
        <input  type="number" name="registroTelefono" id="telefono" >
        </div>


        <div>
        <input class="boton_registro" type="submit" value="Registrar">
        </div>
        
    </form>

    
    <?php
        $registro=ControladorFormularios::ctrRegistro();
        if($registro=="ok"){
            echo ("Los datos fueron almacenados con éxito");
            echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                    }
                  </script>';
        }
    ?>
</section>