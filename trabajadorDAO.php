<?php 

//include_once '../ConstantesConexion.php'; 
//include_once  'modelos/ConBdMysql.php'; 

class trabajadorDao extends ConBdMySql {

public function __construct($servidor, $base, $loginBD, $passwordBD) {

    parent::__construct ($servidor, $base , $loginBD, $passwordBD); 
}

public function seleccionarTodos () {

    $planConsulta= "SELECT * FROM trabajador" 
    
    
    $registrotrabajador=$this-> conexion ->prepare ($planConsulta)
    $registrotrabajador->execute (); 

    $listadotrabajador  =array (); 

    while (registrotipodeDocumento-> fetch(PDO::FETCH_OBJ){

        $listadotrabajador [] =$registro;  

        
    }
$this-> cierreBd();

    return $listadotrabajador; 



}

public function seleccionarID($sId)  { 


    return $listadoretipodeDocumento;

    $planConsulta= "SELECT * FROM trabajador"; 
    $planConsulta= "WHERE  = ?;";

    $lista=$this -> conexion>preparate ($planConsulta);

    $lista-> exexute (array($sId)[0])); 

    whil($registro=$lista->fetch(PDO::FETCH_OBJ)){

$registroEncontrado[] = $registro; 


    }
this->cierreBd()

if (!empty) (registroEncontrado)){

    return ['exitoseleccionId'=>true  'registroEncontrado' =>; $registroEncontrado];

}

else {
    return ['exitoseleccionId'=>true  'registroEncontrado' =>; $registroEncontrado]; 

}


public function insertar($registro)  { 

}

public function actualizar($registro)  { 

} 

public function eliminar ($sId  = array ()) {

}
 
public function habilitar ($sId  = array ()) { 

}


public function eliminarLogico($sId = array()){ 


}

} 
?> 