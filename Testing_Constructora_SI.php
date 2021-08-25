<?php 

include_once "../modelos/ConstantesConexion.php";
include_once PATH "../modelos/ConBdMysql.php"; 
include_once PATH"../modelos/modelo_Constructora/ConstructoraDAO.php";  


$sId=array(645); 

$constructora=new ConstructoraDAO (SERVIDOR,BASE,USUARIO_BD,CONTRASENIA_BD); 

$ConstructorSeleccionado=$libros-> seleccionarId($sId); 

echo "<pre>";
print_r ($libroSeleccionado); 
echo "</pre"; 