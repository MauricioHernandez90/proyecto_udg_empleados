<?php

    require_once "controladores/controlador.php";
    require_once "modelos/modelo.php";
    require_once "controladores/formulariocontrolador.php";
    require_once "modelos/formulariomodelo.php";

    $mvc = new mvcController();
    $mvc -> plantilla();


?>