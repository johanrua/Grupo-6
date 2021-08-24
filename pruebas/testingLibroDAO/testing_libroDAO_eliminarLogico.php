<?php

include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/modeloLibros/LibrosDAO.php";

$sId = array(128);
$libro = new LibroDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);
$eliminarLogicoId = $libro -> eliminarLogico($sId);

echo "<pre>";
print_r($eliminarLogicoId);
echo "</pre>";

?>