<?php
    //importando datos
    function GenerarProducto($id){
        $conex = new Conexion();
        $cn = $conex->conexion();
        //
        $sql = "SELECT * FROM producto WHERE id = $id";
        $consulta = $cn->prepare($sql);
        $consulta->execute();
        $registro = $consulta->fetch(PDO::FETCH_ASSOC);
        $prod = new Producto($registro['Nombre'],$registro['Disponible'],
        $registro['Precio']);
        $prod->SetId($id);
        return $prod;
    }
    class Producto{
        function __construct($nombre,$disponibles,$precio)
        {
            $this->nombre = $nombre;
          //  $this->fechaI = $fechaI;
            $this->disponibles = $disponibles;
            $this->precio = $precio;
        }
        private $id;
        private $nombre;
    //    private $fechaI;
        private $disponibles;
        private $precio;
        private $foto;
        function SetFoto($url){
            $this->foto = $url;
        }
        //funcion INSERTAR FOTO
      /*  function InsertarFoto(){
            $conex = new Conexion();
            $cn = $conex->conexion();
            //sql
            $sqlInsert = "INSERT INTO producto (foto) VALUE ('$this->foto')";
            //
            $sentencia = $cn->prepare($sqlInsert);
            $sentencia->execute();
        }*/
        //funcion para devolver id
        function BuscarId($nombre){
            $conex = new Conexion();
            $cn = $conex->conexion();
            //
            $sqlSelect = "SELECT * FROM producto WHERE Nombre = '$nombre'";
            $query = $cn->prepare($sqlSelect);
            $query->execute();
            $reg = $query->fetch(PDO::FETCH_ASSOC);
            $id = $reg['id'];
            return $id;
        }

        //funciones precio
        function GetPrecio(){
            return $this->precio;
        }
        //funciones nombre
        function GetNombre(){
            return $this->nombre;
        }
        //function id
        function SetId($id){
            $this->id = $id;
        }
        function GetId(){
            return $this->id;
        }
        //comprobar si el producto existe
        function comprobarProd(){
            $conex = new Conexion();
            $cn = $conex->conexion();
            $sql = "SELECT * FROM producto where Nombre = '$this->nombre
            '";
            //preparacion
            $consulta = $cn->prepare($sql);
            $consulta->execute();
            $cn = null;
            if($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
                return true;
            }else{
                return false;
            }
        }
        //insertar prod
        function InsertarProducto($aprobacion){
            $conex = new Conexion();
            $cn = $conex->conexion();
            $fecha = date("d/m/Y");
            // consulta
            $sql = "INSERT INTO producto VALUES(null,'$this->nombre',
            '$fecha',$this->precio,'$this->disponibles', 0,'$this->foto',$aprobacion)";
            $consulta = $cn->prepare($sql);
            try{
                $consulta->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
?>