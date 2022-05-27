<?php

    require_once "conexion.php";

    class modeloFormulario{
        //registro

        static public function mdlRegistro($tabla,$dato){

            $sql="INSERT INTO $tabla (nombre, apellido, contrasena, correo, rfc, curp, salario, telefono) VALUES (:nombre,:apellido,:psd,:email,:rfc,:curp,:salario, :telefono)";
            $stmt=conexion::conectar()->prepare($sql);

            $stmt ->bindParam(':nombre',$dato['nombre'], PDO::PARAM_STR);
            $stmt ->bindParam(':apellido',$dato['apellido'], PDO::PARAM_STR);
            $stmt ->bindParam(':psd',$dato['contrasena'], PDO::PARAM_STR);
            $stmt ->bindParam(':email',$dato['correo'], PDO::PARAM_STR);
            $stmt ->bindParam(':rfc',$dato['rfc'], PDO::PARAM_STR);
            $stmt ->bindParam(':curp',$dato['curp'], PDO::PARAM_STR);
            $stmt ->bindParam(':salario',$dato['salario'], PDO::PARAM_STR);
            $stmt ->bindParam(':telefono',$dato['telefono'], PDO::PARAM_STR);
            


            if($stmt->execute()){
                return "ok";
            }
            else{
                print_r(conexion::conectar()->errorInfo());
            };
        }

        //registro
        static public function mdlSeleccionarRegistros($tabla,$item,$valor)
        {
            if($item==null && $valor==null){
                $sql="SELECT * FROM $tabla";
                $stmt=conexion::conectar()->prepare($sql);

                $stmt->execute();

                return $stmt->fetchALL();
            }else{
                $sql="SELECT * FROM $tabla WHERE $item = :$item";
                $stmt=conexion::conectar()->prepare($sql);
                $stmt ->bindParam(':'.$item,$valor, PDO::PARAM_STR);

                $stmt->execute();

                return $stmt->fetch();
            }

            
        }


         //Eliminar
         static public function mdlEliminarRegistros($tabla,$item,$valor)
         {
             if($item==null && $valor==null){
                 $sql="SELECT * FROM $tabla";
                 $stmt=conexion::conectar()->prepare($sql);
 
                 $stmt->execute();
 
                 return $stmt->fetchALL();
             }else{
                 $sql="SELECT * FROM $tabla WHERE $item = :$item";
                 $stmt=conexion::conectar()->prepare($sql);
                 $stmt ->bindParam(':'.$item,$valor, PDO::PARAM_STR);
 
                 $stmt->execute();
 
                 return $stmt->fetch();
             }
 
             
         }




    }



?>