<?php

        //funcion para productos
        function MostrarProductos($id){
                $conex = new Conexion();
                $cn = $conex->conexion();
                $idReducido=$id - 10;
                $sqlSelect = "SELECT * FROM producto";
                $query = $cn->prepare($sqlSelect);
                $query->execute();
                while($registro = $query->fetch(PDO::FETCH_ASSOC)){
                        ?>
                                <div class="bloque-prod">
                                        <div class="img">
                                                <img src="<?php echo $registro[ 'foto']?>" alt="">
                                        </div>
                                        <div class="info">
                                                <h4 class="nombre">
                                                        <?php echo $registro['Nombre'];?>
                                                </h4>
                                                <p class="infoProd">
                                                        Quedan: <?php echo $registro['Disponible'];?>
                                                </p>
                                        </div>
                                        <div class="precio">
                                                <?php echo $registro['Precio']."RD";?>
                                        </div>
                                </div>
                        <?php
                }
        }
?>