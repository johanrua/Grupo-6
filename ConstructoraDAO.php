<?php 

//include_once '../ConstantesConexion.php'; 
//include_once  'modelos/ConBdMysql.php'; 

class ConstructoraDao extends ConBdMySql {

public function __construct($servidor, $base, $loginBD, $passwordBD) {

    parent::__construct ($servidor, $base , $loginBD, $passwordBD); 
}

public function seleccionarTodos () {

    $planConsulta= "SELECT l.con_id,l.estado.l.nombre,l.precio,sl.sys_id,sl.sysNombre";
    $planConsulta= "FROM constructora l ";
    $planConsulta="JOIN  system_user sl ON l.system_user_sys_id=sl.sys_id";
    $planConsulta="ORDER l.con_id ASC" ; 

    $registroConstructora =$this-> conexion ->prepare ($planConsulta)
    $registroConstrucora->execute (); 

    $listadoregistroConstructora =array (); 

    while (registroConstructora-> fetch(PDO::FETCH_OBJ){

        $listadoregistroConstructora [] =$registro; 

        
    }
$this-> cierreBd();

    return $listadoregistroConstructora;
}

public function seleccionarID($sId)  { 
    $planConsulta= "SELECT * FROM constructora 1"; 
    $planConsulta= "WHERE l.con_id = ?;";

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