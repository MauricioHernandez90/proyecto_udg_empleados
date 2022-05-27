<?php

    class conexion{
        
        static public function conectar(){
            //PDO
            $link = new PDO("mysql:host=b71ecvtenpr3gycgkrzu-mysql.services.clever-cloud.com;dbname=b71ecvtenpr3gycgkrzu", "ukzert2fshm4tm47", "Ou9GvMdxvDMmIj0XBhET");
            $link->exec("set names utf8");

            return $link;
        }
    }



?>