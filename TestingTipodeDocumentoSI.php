<?php 

include_once "../modelos/ConstantesConexion.php";
include_once PATH "../modelos/ConBdMysql.php"; 
include_once PATH"../modelos/modelo_TipodeDocumento/TipodeDocumentoDAO.php";  


$sId=array(646); 

$documento=new TipodeDocumento (SERVIDOR,BASE,USUARIO_BD,CONTRASENIA_BD); 

$documentoSeleccionado=$libros-> seleccionarId($sId); 

echo "<pre>";
print_r ($documentoSeleccionado); 
echo "</pre"; 