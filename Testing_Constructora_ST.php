<?php 

include "../modelos/ConstantesConexion.php";
include "../modelos/ConBdMysql.php"; 
include "../modelos/modelo_Constructora/ConstructoraDAO.php"; 


$constructora=new ConstructoraDAO (SERVIDOR,BASE,USUARIO_BD,CONTRASENIA_BD) 


$lista=$constructora->seleccionarTodos (); 


echo"<pre>";
print_r ($lista); 
echo "<pre>"; 










?>