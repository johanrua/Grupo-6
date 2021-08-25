<?php

include_once "../ConstantesConexion.php";
include_once "../ConBdMysql.php";

class LibroDAO extends ConDbMySql{
    public function __construct($servidor, $base, $loginDB, $passwordDB){
        parent::__construct(SERVIDOR, BASE, USUARIO_DB, CONTRASENIA_DB);  
    }
    
    public function seleccionarTodos(){
        $planconsulta = "SELECT l.isbn,l.titulo,l.autor,l.precio,cl.catLibId,cl.catLibNombre ";
        $planconsulta.="FROM libros l ";
        $planconsulta.="JOIN categorialibro cl ON l.categoriaLibro_catLibId=cl.catLibId "; 
        $planconsulta.="ORDER BY l.isbn ASC ";

        $registroLibros = $this->conexion->prepare($planconsulta);
        $registroLibros->execute();

        $listadoRegistrosLibros = array();

        while( $registro = $registroLibros->fetch(PDO::FETCH_OBJ)){
            $listadoRegistrosLibros[]=$registro;
        }
          $this->cierreBd();
          return $listadoRegistrosLibros;
    }

    public function seleccionarID($sId){
        $consulta = "SELECT * FROM libros WHERE libros.isbn = ? ";

        $listar = $this->conexion->prepare($consulta);
        $listar->execute(array($sId[0]));

        $registroEncontrado = array();

        while( $registro = $listar->fetch(PDO::FETCH_OBJ)){
            $registroEncontrado[]=$registro;
        }
          $this->cierreBd();
          
        if(!empty($registroEncontrado)){
            return ['exitoSeleccionId' => true, 'registroEncontrado' => $registroEncontrado];
        }else{
            return ['exitoSeleccionId' => false, 'registroEncontrado' => $registroEncontrado];
        }
    } 

    public function insertar($registro){
        try {
            $consulta = "INSERT INTO libros (isbn, titulo, autor, 
            precio, categoriaLibro_catLibId) VALUES (:isbn , :titulo , 
            :autor , :precio , :categoriaLibro_catLibId );";

            $insertar = $this->conexion->prepare($consulta);

            $insertar -> bindParam(":isbn", $registro['isbn']);
            $insertar -> bindParam(":titulo", $registro['titulo']);
            $insertar -> bindParam(":autor", $registro['autor']);
            $insertar -> bindParam(":precio", $registro['precio']);
            $insertar -> bindParam(":categoriaLibro_catLibId", $registro['categoriaLibro_catLibId']);

            $insercion = $insertar->execute();

            $clavePrimaria = $this->conexion->lastInsertId();

            return ['Inserto'=>1,'resultado'=>$clavePrimaria];

            $this->cierreBd();

        } catch (PDOException $pdoExc) {
            return ['Inserto'=>0,$pdoExc->errorInfo[2]];
        }
    }

    public function actualizar($registro){
        try {
            $consulta = "UPDATE libros SET titulo = :titulo, autor = :autor, 
            precio = :precio, categoriaLibro_catLibId = :categoriaLibro_catLibId WHERE isbn = :isbn;";
            
            $actualizar = $this -> conexion -> prepare($consulta);

            $actualizar -> bindParam(":titulo", $registro['titulo']);
            $actualizar -> bindParam(":autor", $registro['autor']);
            $actualizar -> bindParam(":precio", $registro['precio']);
            $actualizar -> bindParam(":categoriaLibro_catLibId", $registro['categoriaLibro_catLibId']);
            $actualizar -> bindParam(":isbn", $registro['isbn']);

            $actualizacion = $actualizar -> execute();

            $this->cierreBd();

            return ['actualizacion' => $actualizacion, 'mensaje' => 'Resgistro Actualizado'];

        } catch (PDOException $pdoExc) {
            return ['actualizacion' => $actualizacion, 'mensaje' => $pdoExc];
        }
    }

    public function eliminar($sId = array()){
        try{
        $consulta = "DELETE FROM libros WHERE isbn = :isbn;";

        $eliminar = $this->conexion->prepare($consulta);
        $eliminar->bindParam(':isbn', $sId[0],PDO::PARAM_INT);
        $resultado = $eliminar->execute();
        print_r($resultado);
        $this->cierreBd();

        if(!empty($resultado)){
            return ['eliminado' => true, 'registroEliminado' => array($sId[0])];
        }
    }catch(PDOException $pdo){
            return ['eliminado' => false, 'mensaje' => $pdo];
        }
    }

    public function habilitar($sId = array()){
        try {
            $cambiarEstado = 1;

            if(isset($sId[0])){
                $actualizar = "UPDATE libros SET estado = ? WHERE isbn = ?";
                $actualizacion = $this->conexion->prepare($actualizar);
                $actualiza = $actualizacion->execute(array($cambiarEstado, $sId[0]));
                return ['actualizacion' => $actualizacion, 'mensaje' => 'Resgistro Activado'];
            }
        } catch (PDOException $pdoExc) {
            return ['actualizacion' => $actualiza, 'mensaje' => $pdoExc];
        }
    }

    public function eliminarLogico($sId = array()){
        try {
            $cambiarEstado = 0;

            if(isset($sId[0])){
                $actualizar = "UPDATE libros SET estado = ? WHERE isbn = ?";
                $actualizacion = $this->conexion->prepare($actualizar);
                $actualizaciones = $actualizacion->execute(array($cambiarEstado, $sId[0]));
                return ['actualizacion' => $actualizacion, 'mensaje' => 'Resgistro Desactivado'];
            }
        }catch (PDOException $pdoExc) {
            return ['actualizacion' => $actualizaciones, 'mensaje' => $pdoExc];
        }
        
    }
}

    
?>