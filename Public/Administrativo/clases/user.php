<?php
    //importando datos
    //require('../../../setup/datosConexion.php');
    //funcion para eliminar ususarios
        //funcion eliminar empleados
function EliminarUsuario($id){
    //conexion 
    $conex = new Conexion();
    $cn = $conex->conexion();
    //sql
    $sql = "DELETE FROM usuario where ID = $id";
    //preparacion 
    $consulta = $cn->prepare($sql);
    try{
        $consulta->execute();
    }catch(PDOException $e){
        $e->getMessage();
    }
    //retorno
    if($consulta != false){
        return true;
    }else{
        return false;
    }
    $conex = null;
    $cn = null;
        }
    class usuario{
        //funcion constructora
        function __construct($nombreUser,$pass)
        {
            $this->nombre = $nombreUser;
            $this->pass = $pass;
            $this->datos = new Conexion();
        }
        //acceso a datos
        private $nombre;
        private $pass;
        //funciones getters
        function GetUser(){
            return $this->nombre;
        }
        //funcion para insertar un usuario depende del nivel que vayamos a ingresar
        // Nivel 1 cliente, Nivel 2 Empleado, Nivel 3 Admin
        //Despues añadiremos a profundidad bien los niveles de usuarios mientras esto es lo basico
        function insertar($nivelUser){
            //
            if($this->datos->ComprobarDato("usuario","nombreUsuario",$this->nombre)==false){
                //creando un objeto de conexion
                if($nivelUser <= 3){
                    $conex = $this->datos->conexion();
                    //String de la consulta SQL
                    $sql = "INSERT INTO USUARIO VALUES(NULL,
                            '$this->nombre','$this->pass','$nivelUser')";
                    //preparacion y ejecucion de la consulta
                    try{
                    $registro = $conex->prepare($sql);
                    $registro->execute();
                    //en caso de insertarse correctamente se devolvera un valor verdadero
                    if($registro){
                        return true;
                    }else{
                        return false;
                    }
                    }catch(PDOException $e){
                        print($e->getMessage());
                    }
                    $conex = null;
                }else{
                    //aqui inmediatamente devolvera un false ya que el nivel introducido no esta contemplado
                    return false;
                }
            }

        }
    }
?>