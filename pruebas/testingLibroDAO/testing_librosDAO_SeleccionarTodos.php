<?php

include_once '../../modelos/ConstantesConexion.php';
include_once '../../modelos/ConBdMysql.php';
include_once '../../modelos/modeloLibros/LibrosDAO.php';

$libros=new LibroDAO(SERVIDOR,BASE,USUARIO_DB,CONTRASENIA_DB);

$listadoCompleto=$libros->seleccionarTodos();

echo "<pre>";
print_r($listadoCompleto);
echo "</pre>";

?>