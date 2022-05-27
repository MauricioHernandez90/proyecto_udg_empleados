<?php

    class mvcController{

        public function plantilla(){
            include "vistas/plantilla.php";
        }

        public function enlacesPaginasController(){
            if (isset($_GET["action"])){
                $enlacesControl=$_GET["action"];
            }
            else{
                $enlacesControl="index";
            }
            $respuesta=EnlacesPaginas::enlacesPaginasModelo($enlacesControl);

            include $respuesta;
            
        }


    }

?>