<?php

include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/modeloLibros/LibrosDAO.php";

$registro['isbn']=128;
$registro['titulo']="2252819 TPS";
$registro['autor']="Camilo Boada";
$registro['precio']=100000;
$registro['categoriaLibro_catLibId']=2;

$libro = new LibroDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);

$insertarlibro = $libro -> insertar($registro);

echo "<pre>";
print_r($insertarlibro);
echo "</pre>";

?>