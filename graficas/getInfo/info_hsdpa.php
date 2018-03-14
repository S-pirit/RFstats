<?php 
try
{  
//deniedHSDPA
    $sql_dato1="SELECT deniedHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found1=$base->prepare($sql_dato1);
    $found1->execute(array());
    
    while($consulta1=$found1->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato1[$consulta1['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta1['hsdpa_date'],
                'deniedHSDPA' 	=> $consulta1['deniedHSDPA'],
                );	
       
/*    
echo "<pre>";
print_r($arraydeniedHSDPA);
echo"</pre>";
*/
    }
    
//RRC success
    $sql_dato2="SELECT dropHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found2=$base->prepare($sql_dato2);
    $found2->execute(array());
    
    while($consulta2=$found2->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato2[$consulta2['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta2['hsdpa_date'],
                'dropHSDPA' 	=> $consulta2['dropHSDPA'],
                );	
       
    }
    
//RAB voice success
    $sql_dato3="SELECT thput,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found3=$base->prepare($sql_dato3);
    $found3->execute(array());
    
    while($consulta3=$found3->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato3[$consulta3['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta3['hsdpa_date'],
                'thput' => $consulta3['thput'],
                );	
       
    }

//Code success
    $sql_dato4="SELECT avgHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found4=$base->prepare($sql_dato4);
    $found4->execute(array());
    
    while($consulta4=$found4->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato4[$consulta4['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta4['hsdpa_date'],
                'avgHSUPA' => $consulta4['avgHSUPA'],
                );	
       
    }
    
    
//Usuarios DCH DL
    $sql_dato5="SELECT avgHSDPA, hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found5=$base->prepare($sql_dato5);
    $found5->execute(array());
    
    while($consulta5=$found5->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato5[$consulta5['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta5['hsdpa_date'],
                'avgHSDPA' => $consulta5['avgHSDPA'],
                );	
       
    }
    


//Usuarios DCH UL
    $sql_dato6="SELECT maxHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found6=$base->prepare($sql_dato6);
    $found6->execute(array());
    
    while($consulta6=$found6->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato6[$consulta6['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta6['hsdpa_date'],
                'maxHSUPA' => $consulta6['maxHSUPA'],
                );	
       
    }
    
    
//maxhsdpa
    $sql_dato7="SELECT maxHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$sector_data' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found7=$base->prepare($sql_dato7);
    $found7->execute(array());
    
    while($consulta7=$found7->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato7[$consulta7['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta7['hsdpa_date'],
                'maxHSDPA' => $consulta7['maxHSDPA'],
                );	
       
    }
//---------------------------------------------------------------------------------------------------------Complemento1
    
    $sql_dato8="SELECT deniedHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found8=$base->prepare($sql_dato8);
    $found8->execute(array());
    
    while($consulta8=$found8->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato8[$consulta8['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta8['hsdpa_date'],
                'deniedHSDPA' 	=> $consulta8['deniedHSDPA'],
                );	
       
/*    
echo "<pre>";
print_r($arraydeniedHSDPA);
echo"</pre>";
*/
    }
    
//RRC success$complemento1
    $sql_dato9="SELECT dropHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found9=$base->prepare($sql_dato9);
    $found9->execute(array());
    
    while($consulta9=$found9->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato9[$consulta9['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta9['hsdpa_date'],
                'dropHSDPA' 	=> $consulta9['dropHSDPA'],
                );	
       
    }
    
//RAB voice success$complemento1
    $sql_dato10="SELECT thput,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found10=$base->prepare($sql_dato10);
    $found10->execute(array());
    
    while($consulta10=$found10->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato10[$consulta10['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta10['hsdpa_date'],
                'thput' => $consulta10['thput'],
                );	
       
    }

//Code success$complemento1
    $sql_dato11="SELECT avgHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found11=$base->prepare($sql_dato11);
    $found11->execute(array());
    
    while($consulta11=$found11->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato11[$consulta11['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta11['hsdpa_date'],
                'avgHSUPA' => $consulta11['avgHSUPA'],
                );	
       
    }
    
    
//Usuarios DCH DL$complemento1
    $sql_dato12="SELECT avgHSDPA, hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found12=$base->prepare($sql_dato12);
    $found12->execute(array());
    
    while($consulta12=$found12->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato12[$consulta12['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta12['hsdpa_date'],
                'avgHSDPA' => $consulta12['avgHSDPA'],
                );	
       
    }
    


//Usuarios DCH UL$complemento1
    $sql_dato13="SELECT maxHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found13=$base->prepare($sql_dato13);
    $found13->execute(array());
    
    while($consulta13=$found13->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato13[$consulta13['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta13['hsdpa_date'],
                'maxHSUPA' => $consulta13['maxHSUPA'],
                );	
       
    }
    
    
//Denied $complemento1
    $sql_dato14="SELECT maxHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento1' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found14=$base->prepare($sql_dato14);
    $found14->execute(array());
    
    while($consulta14=$found14->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato14[$consulta14['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta14['hsdpa_date'],
                'maxHSDPA' => $consulta14['maxHSDPA'],
                );	
       
    }

    
//-------------------------------------------------------------------------------------------Complemento2
    
    $sql_dato15="SELECT deniedHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found15=$base->prepare($sql_dato15);
    $found15->execute(array());
    
    while($consulta15=$found15->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato15[$consulta15['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta15['hsdpa_date'],
                'deniedHSDPA' 	=> $consulta15['deniedHSDPA'],
                );	
       
/*    
echo "<pre>";
print_r($arraydeniedHSDPA);
echo"</pre>";
*/
    }
    
//RRC success$complemento1
    $sql_dato16="SELECT dropHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found16=$base->prepare($sql_dato16);
    $found16->execute(array());
    
    while($consulta16=$found16->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato16[$consulta16['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta16['hsdpa_date'],
                'dropHSDPA' 	=> $consulta16['dropHSDPA'],
                );	
       
    }
    
//RAB voice success$complemento1
    $sql_dato17="SELECT thput,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found17=$base->prepare($sql_dato17);
    $found17->execute(array());
    
    while($consulta17=$found17->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato17[$consulta17['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta17['hsdpa_date'],
                'thput' => $consulta17['thput'],
                );	
       
    }

//Code success$complemento1
    $sql_dato18="SELECT avgHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found18=$base->prepare($sql_dato18);
    $found18->execute(array());
    
    while($consulta18=$found18->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato18[$consulta18['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta18['hsdpa_date'],
                'avgHSUPA' => $consulta18['avgHSUPA'],
                );	
       
    }
    
    
//Usuarios DCH DL$complemento1
    $sql_dato19="SELECT avgHSDPA, hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found19=$base->prepare($sql_dato19);
    $found19->execute(array());
    
    while($consulta19=$found19->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato19[$consulta19['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta19['hsdpa_date'],
                'avgHSDPA' => $consulta19['avgHSDPA'],
                );	
       
    }
    


//Usuarios DCH UL$complemento1
    $sql_dato20="SELECT maxHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found20=$base->prepare($sql_dato20);
    $found20->execute(array());
    
    while($consulta20=$found20->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato20[$consulta20['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta20['hsdpa_date'],
                'maxHSUPA' => $consulta20['maxHSUPA'],
                );	
       
    }
    
    
//Denied $complemento1
    $sql_dato21="SELECT maxHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento2' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found21=$base->prepare($sql_dato21);
    $found21->execute(array());
    
    while($consulta21=$found21->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato21[$consulta21['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta21['hsdpa_date'],
                'maxHSDPA' => $consulta21['maxHSDPA'],
                );	
       
    }
    
    
    
    
//---------------------------------------------------------------------------------------------------------------Complemento3
    
    $sql_dato22="SELECT deniedHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found22=$base->prepare($sql_dato22);
    $found22->execute(array());
    
    while($consulta22=$found22->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato22[$consulta22['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta22['hsdpa_date'],
                'deniedHSDPA' 	=> $consulta22['deniedHSDPA'],
                );	
       
/*    
echo "<pre>";
print_r($arraydeniedHSDPA);
echo"</pre>";
*/
    }
    
//RRC success$complemento1
    $sql_dato23="SELECT dropHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found23=$base->prepare($sql_dato23);
    $found23->execute(array());
    
    while($consulta23=$found23->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato23[$consulta23['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta23['hsdpa_date'],
                'dropHSDPA' 	=> $consulta23['dropHSDPA'],
                );	
       
    }
    
//RAB voice success$complemento1
    $sql_dato24="SELECT thput,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found24=$base->prepare($sql_dato24);
    $found24->execute(array());
    
    while($consulta24=$found24->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato24[$consulta24['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta24['hsdpa_date'],
                'thput' => $consulta24['thput'],
                );	
       
    }

//Code success$complemento1
    $sql_dato25="SELECT avgHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found25=$base->prepare($sql_dato25);
    $found25->execute(array());
    
    while($consulta25=$found25->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato25[$consulta25['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta25['hsdpa_date'],
                'avgHSUPA' => $consulta25['avgHSUPA'],
                );	
       
    }
    
    
//Usuarios DCH DL$complemento1
    $sql_dato26="SELECT avgHSDPA, hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found26=$base->prepare($sql_dato26);
    $found26->execute(array());
    
    while($consulta26=$found26->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato26[$consulta26['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta26['hsdpa_date'],
                'avgHSDPA' => $consulta26['avgHSDPA'],
                );	
       
    }
    


//Usuarios DCH UL$complemento1
    $sql_dato27="SELECT maxHSUPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found27=$base->prepare($sql_dato27);
    $found27->execute(array());
    
    while($consulta27=$found27->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato27[$consulta27['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta27['hsdpa_date'],
                'maxHSUPA' => $consulta27['maxHSUPA'],
                );	
       
    }
    
    
//Denied $complemento1
    $sql_dato28="SELECT maxHSDPA,hsdpa_date FROM hsdpa WHERE hsdpa_sector = '$complemento3' AND hsdpa_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY hsdpa_date ASC";
    $found28=$base->prepare($sql_dato28);
    $found28->execute(array());
    
    while($consulta28=$found28->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato28[$consulta28['hsdpa_date']] = array(
                'hsdpa_date' 	=> $consulta28['hsdpa_date'],
                'maxHSDPA' => $consulta28['maxHSDPA'],
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