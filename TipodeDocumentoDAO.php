<?php 

//include_once '../ConstantesConexion.php'; 
//include_once PATH. 'modelos/ConBdMysql.php'; 

class TipoDocumentiDao extends ConBdMySql {

public function __construct($servidor, $base, $loginBD, $passwordBD) {

    parent::__construct ($servidor, $base , $loginBD, $passwordBD); 
}

public function seleccionarTodos () {


    $planConsulta= "SELECT t.tip_id,t.tip_sigla,t.tip_nombre_documento,t.tip_estado";
    $planConsulta= "FROM tipo_documento t"
    $planConsulta= "JOIN trabajador t2 ON t2.trabajador_tra_id=t2.tra_id" 
    $planConsulta=  "ORDER t.tip_id ASC ;"  

    $registrotipodeDocumento =$this-> conexion ->prepare ($planConsulta)
    $registrotipodeDocumento->execute (); 

    $listadoretipodeDocumento =array (); 

    while (registrotipodeDocumento-> fetch(PDO::FETCH_OBJ){

        $listadoretipodeDocumento [] =$registro; 

        
    }
$this-> cierreBd();

    return $listadoretipodeDocumento;

    $planConsulta= "SELECT * FROM tipo_documento t"; 
    $planConsulta= "WHERE t.tip_id = ?;";

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

public function seleccionarID($sId)  { 





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