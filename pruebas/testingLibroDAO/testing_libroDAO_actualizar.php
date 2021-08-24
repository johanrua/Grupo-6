<?php

include_once "../../modelos/ConBdMysql.php";
include_once "../../modelos/ConstantesConexion.php";
include_once "../../modelos/modeloLibros/LibrosDAO.php";

$registro['isbn']=1;
$registro['titulo']="Hola mundo";
$registro['autor']=null;
$registro['precio']='60000';
$registro['categoriaLibro_catLibId']=2;

$libro = new LibroDAO(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);

$actualizarlibro = $libro -> actualizar($registro);

echo "<pre>";
print_r($actualizarlibro);
echo "</pre>";

?>