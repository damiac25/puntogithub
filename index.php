<?php
require_once "controladores/ctrlPrincipal.php";
require_once "controladores/ctrlUsuarios.php";
require_once "controladores/CtrlPersona.php";
require_once "controladores/ctrlClientes.php";

require_once "modelos/mdlUsuarios.php";
require_once "modelos/MdlPersona.php";
require_once "modelos/mdlClientes.php";

$objPrincipal = new Principal();
$objPrincipal->ctrlPrincipal();