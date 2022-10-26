<?php
require 'Conexion.php';

class Clientes{
    function buscarCliente(){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="select * from cliente";
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

    public function InsertarCliente($Nit,$Nombre,$Telefono,$Direccion){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="insert into cliente(nit,nombre_Cliente,telefono,direccion) values(:nit,:nombre_Cliente,:telefono,:direccion)";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nit',$Nit);
        $estado->bindParam(':nombre_Cliente',$Nombre);
        $estado->bindParam(':telefono',$Telefono);
        $estado->bindParam(':direccion',$Direccion);

        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }

    public function EliminarCliente($id_cliente){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="delete from cliente where id_Cliente=:id_Cliente";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':id_Cliente',$id_cliente);

        if(!$estado){
            return 'Error al eliminar';
        }else{
            $estado->execute();
            return 'Datos eliminado';
        }
    }

    public function ActualizarCliente($id_Cliente,$NIT,$Nombre,$Telefono,$Direccion){
        $modelo= new Conexion();
        $conexion=$modelo->obtener_conexion();
        $sql="update cliente set nit=:nit, nombre_Cliente=:nombre, telefono=:telefono, direccion=:direccion  where id_Cliente=:id_cliente";
        $estado=$conexion->prepare($sql);
        $estado->bindParam(':nombre',$Nombre);
        $estado->bindParam(':id_cliente',$id_Cliente);
        $estado->bindParam(':telefono',$Telefono);
        $estado->bindParam(':nit',$NIT);
        $estado->bindParam(':direccion',$Direccion);
        if(!$estado){
            return 'Error al guardar';
        }else{
            $estado->execute();
            return 'Datos guardados con exito';
        }
    }
}
?>