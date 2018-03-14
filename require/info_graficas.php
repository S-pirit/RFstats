<?php
try
{
    include "reg/connection.php";
    $sector_data=$_GET["select-sector"];
    $fecha_i=$_GET["fecha_i"];
    $fecha_f=$_GET["fecha_f"];
    
    
//Avail
    $sql_dato1="SELECT avail,date FROM ccel WHERE ccel_sector = '$sector_data' AND date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY date ASC";
    $found1=$base->prepare($sql_dato1);
    $found1->execute(array());
    
    while($consulta1=$found1->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato1[$consulta1['date']] = array(
                'date' 	=> $consulta1['date'],
                'avail' 	=> $consulta1['avail'],
                );	
       
/*    
echo "<pre>";
print_r($arrayAvail);
echo"</pre>";
*/
    }
    
//RRC success
    $sql_dato2="SELECT rrcSuccess,date FROM ccel WHERE ccel_sector = '$sector_data' AND date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY date ASC";
    $found2=$base->prepare($sql_dato2);
    $found2->execute(array());
    
    while($consulta2=$found2->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato2[$consulta2['date']] = array(
                'date' 	=> $consulta2['date'],
                'rrcSuccess' 	=> $consulta2['rrcSuccess'],
                );	
       
    }
    
//RAB voice success
    $sql_dato3="SELECT voiceSuccess,date FROM ccel WHERE ccel_sector = '$sector_data' AND date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY date ASC";
    $found3=$base->prepare($sql_dato3);
    $found3->execute(array());
    
    while($consulta3=$found3->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato3[$consulta3['date']] = array(
                'date' 	=> $consulta3['date'],
                'voiceSuccess' => $consulta3['voiceSuccess'],
                );	
       
    }

}
catch(Exception $e)
{
     die("Algo ha salido mal :c  j".$e->getMessage());
}

$fechaInicio= strtotime($fecha_i);
$fechaFin=    strtotime($fecha_f);

?>