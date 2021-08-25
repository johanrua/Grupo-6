<?php

include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/modeloRol/modeloRolDAO.php";

$registro['rol_id_rol']=14;
$registro['rol_tipo_rol']='constructor';
$registro['rol_created_at']='2021-08-02 12:23';
$registro['rol_updated_at']='2021-08-02 04:23';
$registro['rol_usuSesion']='sthdrthf';
$registro['rol_autEstado']=1;

$Rol = new RolDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);

$insertarlibro = $Rol -> insertar($registro);

echo "<pre>";
print_r($insertarlibro);
echo "</pre>";

?>