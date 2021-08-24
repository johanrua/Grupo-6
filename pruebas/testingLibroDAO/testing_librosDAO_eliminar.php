<?php

include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/modeloLibros/LibrosDAO.php";

$sId = array(2);
$libro = new LibroDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);
$eliminarId = $libro -> eliminar($sId);

echo "<pre>";
print_r($eliminarId);
echo "</pre>";

?>