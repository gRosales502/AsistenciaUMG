<?php
require 'Conexion.php';

class Login{
    function buscarUsuario(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="SELECT * FROM usuario";
        $estado=$conexion->prepare($sql);
        $estado->execute();

        while($result = $estado->fetch()){
            $rows[]=$result;
        }
        if(!isset($rows)){
            $rows=null;
        }
        return $rows;
    }

    
}
?>