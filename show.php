<?php
$inc = include("connection.php");
if($inc){
    $consulta = "SELECT * FROM Datos;";
    $resultado = mysqli_query($connect,$consulta);
    if($resultado==true){
        while($row = $resultado->fetch_array()){
            $id = $row["idDato"];
            $sistema = $row["sistema"];
            $gestion = $row["gestion"];
            $mes = $row["mes"];
            $dia = $row["dia"];
            $dato_t = $row["dato_t"];
            $dato_h = $row["dato_h"];
            $dato_p = $row["dato_p"];
            $dato_fpf = $row["dato_fpf"];
            $estado = $row["estado"];
            ?>
            <div>
                <p>
                    <b>ID: </b><?php echo $id; ?><br>
                    <b>Sistema: </b><?php echo $sistema; ?><br>
                    <b>Gestion: </b><?php echo $gestion; ?><br>
                    <b>Mes: </b><?php echo $mes; ?><br>
                    <b>Dia: </b><?php echo $dia; ?><br>
                    <b>Dato T: </b><?php echo $dato_t; ?><br>
                    <b>Dato H: </b><?php echo $dato_h; ?><br>
                    <b>Dato P: </b><?php echo $dato_p; ?><br>
                    <b>Dato FPF: </b><?php echo $dato_fpf; ?><br>
                    <b>Estado: </b><?php echo $estado; ?><br>
                </p>
            </div>
            <?php
        }
    }
}
?>