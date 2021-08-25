<?php

include_once '../../modelos/ConstantesConexion.php';
include_once '../../modelos/ConBdMysql.php';
include_once '../../modelos/modeloRol/modeloRolDAO.php';

$rol=new RolDAO(SERVIDOR,BASE,USUARIO_DB,CONTRASENIA_DB);

$listadoCompleto=$rol->seleccionarTodos();

echo "<pre>";
print_r($listadoCompleto);
echo "</pre>";

?>