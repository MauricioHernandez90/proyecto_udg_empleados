<?php

    class EnlacesPaginas{

        public static function enlacesPaginasModelo($enlaceModelo){
            if(
               $enlaceModelo=="nosotros" ||
               $enlaceModelo=="servicios" ||
               $enlaceModelo=="registro" ||
               $enlaceModelo=="reporte" ||
               $enlaceModelo=="ingreso" ||
               $enlaceModelo=="contactanos"){
               
                $modulo="vistas/modulos/".$enlaceModelo.".php";
            }
            else if($enlaceModelo=="index"){
                $modulo="vistas/modulos/inicio.php";
            }
            else{
                $modulo="vistas/modulos/inicio.php";
            }

            return $modulo;
        }


    }


?>