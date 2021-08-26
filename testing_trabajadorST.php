<?php 

include "../modelos/ConstantesConexion.php";
include "../modelos/ConBdMysql.php"; 
include "../modelos/modelo_trabajador/trabajadorDAO"; 


$constructora=new ConstructoraDAO (SERVIDOR,BASE,USUARIO_BD,CONTRASENIA_BD) 


$lista=$constructora->seleccionarTodos (); 


echo"<pre>";
print_r ($lista); 
echo "<pre>"; 