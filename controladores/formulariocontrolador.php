<?php

    class ControladorFormularios{
        //registro

        static public function ctrRegistro(){
            if(isset($_POST['registroName'])){
                $tabla="empleados";
                $dato= array("nombre"=>$_POST["registroName"],
                            "apellido"=>$_POST["registroApellido"],  
                             "contrasena"=>$_POST["registroPsw"], 
                             "correo"=>$_POST["registroEmail"],
                             "rfc"=>$_POST["registroRfc"],
                             "curp"=>$_POST["registroCurp"],
                             "salario"=>$_POST["registroSalario"],
                             "telefono"=>$_POST["registroTelefono"]
                            );
                
                $respuesta=modeloFormulario::mdlRegistro($tabla,$dato);

                return $respuesta;
            }
        }

        //seleccionar
        static public function ctrSeleccionarRegistros($item,$valor){
            
                $tabla ="empleados";
                $respuesta = modeloFormulario::mdlSeleccionarRegistros($tabla,$item,$valor); 

                return $respuesta;
            
        }

        //Eliminar
           static public function ctrEliminarRegistros($item,$valor){
            
            $tabla ="empleados";
            $respuesta = modeloFormulario::mdlEliminarRegistros($tabla,$item,$valor); 

            return $respuesta;
        
    }

        //Ingresar
        public function ctrIngreso(){
            
            if (isset($_POST["ingresoEmail"])) {
                $tabla ="empleados";
                $item = "correo";
                $valor = $_POST["ingresoEmail"];
                $respuesta = modeloFormulario::mdlSeleccionarRegistros($tabla,$item,$valor); 

                if($respuesta["correo"]==$_POST["ingresoEmail"] && $respuesta["contrasena"]==$_POST["ingresoPassword"]){
                    echo '
                        <script> 
                           window.location="index.php?action=reporte"; 
                        </script>
                    ';
                }else{
                    echo "El Email y/o la contraseña no coinciden <br>";
                }
            }
        
    }
    }


?>