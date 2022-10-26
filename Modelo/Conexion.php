<?php
class Conexion{
 public function obtener_conexion(){
     $user='root';
     $host='localhost';
     $pass='';
     $db='proyectofinal';
     $conexion= new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $conexion;
 }
}
?>