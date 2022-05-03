<?php
    require("user.php");
    require("correo.php");
    //clase cliente
    class Cliente{
        function __construct($nombre,$usuario,$correo)
        {
            $this->nombre = $nombre;
            $this->usuario = $usuario;
            $this->correo = $correo;
            $this->objUser = $usuario;
            $this->objCorreo = $correo;
            $this->datos = new Conexion();
            $this->fkUser=$this->datos->GetId("usuario","nombreUsuario",$this->objUser->GetUser());
            $this->fkCorreo = $this->datos->GetId("correo","correo",$this->objCorreo->GetCorreo());
        }

        function Insertar(){
            $sql = "INSERT INTO clienteid VALUES(null,'$this->nombre',null,$this->fkCorreo,
            $this->fkUser)";
            //cn
            $conex = new Conexion();
            $cn = $conex->conexion();
            $query = $cn->prepare($sql);
            $query->execute();
            if($query == false){
                return false;
            }else{
                return true;   
            }
        }
    }

?>