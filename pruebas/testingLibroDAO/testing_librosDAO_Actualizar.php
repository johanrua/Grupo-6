<?php

include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/modeloLibros/LibrosDAO.php";

$registro['isbn'] = 128;
$registro['titulo'] = 'Camilo';
$registro['autor'] = 'Ardila Lulle';
$registro['precio'] = 60000;
$registro['categoriaLibro_catLibId'] = 1;

$libro = new LibroDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);

$actualizar = $libro -> actualizar($registro);

echo "<pre>";
print_r($actualizar);
echo "</pre>";

?>