<?php
//Recibir datos para el select
try
{
require "../reg/connection.php";
    
    $sql="SELECT * FROM rnc ORDER BY id_rnc ASC";
    $resultado=$base->prepare($sql);
    $resultado->execute(array());
}
catch(Exception $e)
{
     die("Algo ha salido mal :c".$e->getMessage());
}

//Seleccionar fechas
    $sql2="SELECT MAX(".$tipoArchivo."_date) as maxFecha FROM ".$tipoArchivo."";
    $resul=$base->prepare($sql2);
    $resul->execute(array());
    while($fecha1=$resul->fetch(PDO::FETCH_ASSOC))
    {
        $fechaReciente= $fecha1["maxFecha"];
        
    }
    $sql3="SELECT MIN(".$tipoArchivo."_date) as minFecha FROM ".$tipoArchivo."";
    $resul2=$base->prepare($sql3);
    $resul2->execute(array());

    $fecha2=$resul2->fetch(PDO::FETCH_ASSOC);
    $fechaAntigua=$fecha2["minFecha"];

?>

