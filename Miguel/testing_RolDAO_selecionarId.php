<?php

include_once '../../modelos/ConstantesConexion.php';
include_once '../../modelos/ConBdMysql.php';
include_once '../../modelos/modeloRol/modeloRolDAO.php';

$sId = array(1);

$Rol = new RolDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);
$buscarId = $Rol -> seleccionarID($sId);

echo "<pre>";
print_r($buscarId);
echo "</pre>";

?>
