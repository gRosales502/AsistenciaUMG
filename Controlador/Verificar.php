<?php
require 'Controlador.php';

class Verificar extends Controlador{
    public function usuario(){
        $consultas=$this->modelo('Login');
        $usuario=$_POST['usuario'];
        $pass=$_POST['password'];
        $incorrecto=false;
        $filas=$consultas->buscarUsuario();

        if($filas){
            foreach($filas as $fila){
                if(($usuario==$fila['usuario']) && ($pass==$fila['password'])){

                        session_set_cookie_params(60*60*8);
                        session_start();
                        $_SESSION['AsisUMG_id_usuario']=$fila['id_Usuario'];
                        $_SESSION['AsisUMG_usuario']=$fila['usuario'];
                        //$_SESSION['EleFerr_modulos']=$consultas->buscarModulos($fila['id_rol']);
                        $mensaje='Bienvenido';
                        $incorrecto=false;
                        echo json_encode($mensaje);    
                        return true;                                                        
                }else{
                   $incorrecto=true; 
                }
            }
        }else{
            $mensaje='No hay usuarios registrados';
                echo json_encode($mensaje);
                return true;
        }

        if($incorrecto==true){
            $mensaje='Usuario o Contraseña incorrecta';
            echo json_encode($mensaje);
            return true; 
        }
    }
}
?>