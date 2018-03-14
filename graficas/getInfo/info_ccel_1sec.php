<?php
try
{
    include "reg/connection.php";
    $sector_data=$_GET["select-sector"];
    $fecha_i=$_GET["fecha_i"];
    $fecha_f=$_GET["fecha_f"];
    
    
//Avail
    $sql_dato1="SELECT avail,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found1=$base->prepare($sql_dato1);
    $found1->execute(array());
    
    while($consulta1=$found1->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato1[$consulta1['ccel_date']] = array(
                'ccel_date' 	=> $consulta1['ccel_date'],
                'avail' 	=> $consulta1['avail'],
                );	
       
/*    
echo "<pre>";
print_r($arrayAvail);
echo"</pre>";
*/
    }
    
//RRC success
    $sql_dato2="SELECT rrcSuccess,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found2=$base->prepare($sql_dato2);
    $found2->execute(array());
    
    while($consulta2=$found2->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato2[$consulta2['ccel_date']] = array(
                'ccel_date' 	=> $consulta2['ccel_date'],
                'rrcSuccess' 	=> $consulta2['rrcSuccess'],
                );	
       
    }
    
//RAB voice success
    $sql_dato3="SELECT rabSuccess,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found3=$base->prepare($sql_dato3);
    $found3->execute(array());
    
    while($consulta3=$found3->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato3[$consulta3['ccel_date']] = array(
                'ccel_date' 	=> $consulta3['ccel_date'],
                'rabSuccess' => $consulta3['rabSuccess'],
                );	
       
    }

//Code success
    $sql_dato4="SELECT codeSuccess,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found4=$base->prepare($sql_dato4);
    $found4->execute(array());
    
    while($consulta4=$found4->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato4[$consulta4['ccel_date']] = array(
                'ccel_date' 	=> $consulta4['ccel_date'],
                'codeSuccess' => $consulta4['codeSuccess'],
                );	
       
    }
    
    
//Usuarios DCH DL
    $sql_dato5="SELECT usuariosDl, ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found5=$base->prepare($sql_dato5);
    $found5->execute(array());
    
    while($consulta5=$found5->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato5[$consulta5['ccel_date']] = array(
                'ccel_date' 	=> $consulta5['ccel_date'],
                'usuariosDl' => $consulta5['usuariosDl'],
                );	
       
    }
    


//Usuarios DCH UL
    $sql_dato6="SELECT usuariosUl,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found6=$base->prepare($sql_dato6);
    $found6->execute(array());
    
    while($consulta6=$found6->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato6[$consulta6['ccel_date']] = array(
                'ccel_date' 	=> $consulta6['ccel_date'],
                'usuariosUl' => $consulta6['usuariosUl'],
                );	
       
    }
    
    
//Denied call
    $sql_dato7="SELECT deniedCall,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found7=$base->prepare($sql_dato7);
    $found7->execute(array());
    
    while($consulta7=$found7->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato7[$consulta7['ccel_date']] = array(
                'ccel_date' 	=> $consulta7['ccel_date'],
                'deniedCall' => $consulta7['deniedCall'],
                );	
       
    }
    
    
//Drop call
    $sql_dato8="SELECT dropCall,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found8=$base->prepare($sql_dato8);
    $found8->execute(array());
    
    while($consulta8=$found8->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato8[$consulta8['ccel_date']] = array(
                'ccel_date' 	=> $consulta8['ccel_date'],
                'dropCall' => $consulta8['dropCall'],
                );	
       
    }
    
//Max Power
    $sql_dato9="SELECT maxPower,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found9=$base->prepare($sql_dato9);
    $found9->execute(array());
    
    while($consulta9=$found9->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato9[$consulta9['ccel_date']] = array(
                'ccel_date' 	=> $consulta9['ccel_date'],
                'maxPower' => $consulta9['maxPower'],
                );	
       
    }
    
//Avg Power
    $sql_dato10="SELECT avgPower,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found10=$base->prepare($sql_dato10);
    $found10->execute(array());
    
    while($consulta10=$found10->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato10[$consulta10['ccel_date']] = array(
                'ccel_date' 	=> $consulta10['ccel_date'],
                'avgPower' => $consulta10['avgPower'],
                );	
       
    }
    
//carga RTWP
    $sql_dato11="SELECT rtwp,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found11=$base->prepare($sql_dato11);
    $found11->execute(array());
    
    while($consulta11=$found11->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato11[$consulta11['ccel_date']] = array(
                'ccel_date' 	=> $consulta11['ccel_date'],
                'rtwp' => $consulta11['rtwp'],
                );	
       
    }
    
//carga noise
    $sql_dato12="SELECT noise,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found12=$base->prepare($sql_dato12);
    $found12->execute(array());
    
    while($consulta12=$found12->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato12[$consulta12['ccel_date']] = array(
                'ccel_date' 	=> $consulta12['ccel_date'],
                'noise'  => $consulta12['noise'],
                );	
       
    }
    
//CS TRAFFIC
    $sql_dato13="SELECT traffic,ccel_date FROM ccel WHERE ccel_sector = '$sector_data' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found13=$base->prepare($sql_dato13);
    $found13->execute(array());
    
    while($consulta13=$found13->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato13[$consulta13['ccel_date']] = array(
                'ccel_date' 	=> $consulta13['ccel_date'],
                'traffic'  => $consulta13['traffic'],
                );	
       
    }
}
catch(Exception $e)
{
     die("Algo ha salido mal :c  ".$e->getMessage());
}

$fechaInicio= strtotime($fecha_i);
$fechaFin=    strtotime($fecha_f);

?>