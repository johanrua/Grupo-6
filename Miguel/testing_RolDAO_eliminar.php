<?php

include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/modeloRol/modeloRolDAO.php";

$sId = array(128);
$Rol = new RolDAO(,rol_id_rol, rol_tipo_rol, rol_created_at, rol_updated_at, rol_autEstado, rol_usuSesion);
$eliminarLogicoId = $Rol -> eliminarLogico($sId);

echo "<pre>";
print_r($eliminarLogicoId);
echo "</pre>";

?>