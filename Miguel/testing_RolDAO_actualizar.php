<?php

include_once "../../modelos/ConstantesConexion.php";
include_once PATH."modelos/ConBdMysql.php";
include_once PATH."modelos/modeloRol/modeloRolDAO.php";

$registro['rol_id_rol']=5;
$registro['rol_tipo_rol']='miguel';
$registro['rol_usuSesion']='inicio';


$Rol = new RolDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);

$actuali = $Rol -> actualizar($registro);

echo "<pre>";
print_r($actuali);
echo "</pre>";

?>