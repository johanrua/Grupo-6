<?php

include_once '../ConstantesConexion.php';
include_once PATH . 'modelos/ConBdMysql.php';

class material_construccionDAO extends ConBdMysql {

public function _construct($servidor, $base, $loginBD, $passwordBD) {

parent::_construct($servidor, $base, $loginBD, $passwordBD);
}

public function seleccionarTodos() {

}

public function seleccionarId($sId) {

}

public function insertar($registro) {

}

public function actualizar ($registro) {

}
public function eliminar($sId = array()) {

}

public function habilitar($sId = array()) {

}

public function eleiminarLogico($sId = array()) {
    
}

}

?>