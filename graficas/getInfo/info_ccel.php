<?php 
try
{

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

    
    
///////////////////////////////////////////////////////////COMPLEMENTO 1  /////////////////////////////////////////////////////////////////////
   
//Avail
    $sql_dato14="SELECT avail,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found14=$base->prepare($sql_dato14);
    $found14->execute(array());
    
    while($consulta14=$found14->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato14[$consulta14['ccel_date']] = array(
                'ccel_date' 	=> $consulta14['ccel_date'],
                'avail' 	=> $consulta14['avail'],
                );	

    }
//RRC Success
    $sql_dato15="SELECT rrcSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found15=$base->prepare($sql_dato15);
    $found15->execute(array());
    
    while($consulta15=$found15->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato15[$consulta15['ccel_date']] = array(
                'ccel_date' 	=> $consulta15['ccel_date'],
                'rrcSuccess'=> $consulta15['rrcSuccess'],
                );	

    }
//RAB voice success
    $sql_dato16="SELECT rabSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found16=$base->prepare($sql_dato16);
    $found16->execute(array());
    
    while($consulta16=$found16->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato16[$consulta16['ccel_date']] = array(
                'ccel_date' 	=> $consulta16['ccel_date'],
                'rabSuccess' => $consulta16['rabSuccess'],
                );	
       
    }

//Code success
    $sql_dato17="SELECT codeSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found17=$base->prepare($sql_dato17);
    $found17->execute(array());
    
    while($consulta17=$found17->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato17[$consulta17['ccel_date']] = array(
                'ccel_date' 	=> $consulta17['ccel_date'],
                'codeSuccess' => $consulta17['codeSuccess'],
                );	
       
    }
    
//Usuarios DCH DL
    $sql_dato18="SELECT usuariosDl, ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found18=$base->prepare($sql_dato18);
    $found18->execute(array());
    
    while($consulta18=$found18->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato18[$consulta18['ccel_date']] = array(
                'ccel_date' 	=> $consulta18['ccel_date'],
                'usuariosDl' => $consulta18['usuariosDl'],
                );	
       
    }
    


//Usuarios DCH UL
    $sql_dato19="SELECT usuariosUl,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found19=$base->prepare($sql_dato19);
    $found19->execute(array());
    
    while($consulta19=$found19->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato19[$consulta19['ccel_date']] = array(
                'ccel_date' 	=> $consulta19['ccel_date'],
                'usuariosUl' => $consulta19['usuariosUl'],
                );	
       
    }
    
    
//Denied call
    $sql_dato20="SELECT deniedCall,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found20=$base->prepare($sql_dato20);
    $found20->execute(array());
    
    while($consulta20=$found20->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato20[$consulta20['ccel_date']] = array(
                'ccel_date' 	=> $consulta20['ccel_date'],
                'deniedCall' => $consulta20['deniedCall'],
                );	
       
    }
    
    
//Drop call
    $sql_dato21="SELECT dropCall,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found21=$base->prepare($sql_dato21);
    $found21->execute(array());
    
    while($consulta21=$found21->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato21[$consulta21['ccel_date']] = array(
                'ccel_date' 	=> $consulta21['ccel_date'],
                'dropCall' => $consulta21['dropCall'],
                );	
       
    }
    
//Max Power
    $sql_dato22="SELECT maxPower,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found22=$base->prepare($sql_dato22);
    $found22->execute(array());
    
    while($consulta22=$found22->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato22[$consulta22['ccel_date']] = array(
                'ccel_date' 	=> $consulta22['ccel_date'],
                'maxPower' => $consulta22['maxPower'],
                );	
       
    }
    
//Avg Power
    $sql_dato23="SELECT avgPower,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found23=$base->prepare($sql_dato23);
    $found23->execute(array());
    
    while($consulta23=$found23->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato23[$consulta23['ccel_date']] = array(
                'ccel_date' 	=> $consulta23['ccel_date'],
                'avgPower' => $consulta23['avgPower'],
                );	
       
    }
    
//carga RTWP
    $sql_dato24="SELECT rtwp,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found24=$base->prepare($sql_dato24);
    $found24->execute(array());
    
    while($consulta24=$found24->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato24[$consulta24['ccel_date']] = array(
                'ccel_date' 	=> $consulta24['ccel_date'],
                'rtwp' => $consulta24['rtwp'],
                );	
       
    }
    
//carga noise
    $sql_dato25="SELECT noise,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found25=$base->prepare($sql_dato25);
    $found25->execute(array());
    
    while($consulta25=$found25->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato25[$consulta25['ccel_date']] = array(
                'ccel_date' 	=> $consulta25['ccel_date'],
                'noise'  => $consulta25['noise'],
                );	
       
    }
    
//CS TRAFFIC
    $sql_dato26="SELECT traffic,ccel_date FROM ccel WHERE ccel_sector = '$complemento1' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found26=$base->prepare($sql_dato26);
    $found26->execute(array());
    
    while($consulta26=$found26->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato26[$consulta26['ccel_date']] = array(
                'ccel_date' 	=> $consulta26['ccel_date'],
                'traffic'  => $consulta26['traffic'],
                );	
       
    }

    
    
///////////////////////////////////////////////////////////COMPLEMENTO 2  /////////////////////////////////////////////////////////////////////
   
//Avail
    $sql_dato27="SELECT avail,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found27=$base->prepare($sql_dato27);
    $found27->execute(array());
    
    while($consulta27=$found27->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato27[$consulta27['ccel_date']] = array(
                'ccel_date' 	=> $consulta27['ccel_date'],
                'avail' 	=> $consulta27['avail'],
                );	

    }
//RRC Success
    $sql_dato28="SELECT rrcSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found28=$base->prepare($sql_dato28);
    $found28->execute(array());
    
    while($consulta28=$found28->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato28[$consulta28['ccel_date']] = array(
                'ccel_date' 	=> $consulta28['ccel_date'],
                'rrcSuccess'=> $consulta28['rrcSuccess'],
                );	

    }
//RAB voice success
    $sql_dato29="SELECT rabSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found29=$base->prepare($sql_dato29);
    $found29->execute(array());
    
    while($consulta29=$found29->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato29[$consulta29['ccel_date']] = array(
                'ccel_date' 	=> $consulta29['ccel_date'],
                'rabSuccess' => $consulta29['rabSuccess'],
                );	
       
    }

//Code success
    $sql_dato30="SELECT codeSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found30=$base->prepare($sql_dato30);
    $found30->execute(array());
    
    while($consulta30=$found30->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato30[$consulta30['ccel_date']] = array(
                'ccel_date' 	=> $consulta30['ccel_date'],
                'codeSuccess' => $consulta30['codeSuccess'],
                );	
       
    }
    
//Usuarios DCH DL
    $sql_dato31="SELECT usuariosDl, ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found31=$base->prepare($sql_dato31);
    $found31->execute(array());
    
    while($consulta31=$found31->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato31[$consulta31['ccel_date']] = array(
                'ccel_date' 	=> $consulta31['ccel_date'],
                'usuariosDl' => $consulta31['usuariosDl'],
                );	
       
    }
    


//Usuarios DCH UL
    $sql_dato32="SELECT usuariosUl,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found32=$base->prepare($sql_dato32);
    $found32->execute(array());
    
    while($consulta32=$found32->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato32[$consulta32['ccel_date']] = array(
                'ccel_date' 	=> $consulta32['ccel_date'],
                'usuariosUl' => $consulta32['usuariosUl'],
                );	
       
    }
    
    
//Denied call
    $sql_dato33="SELECT deniedCall,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found33=$base->prepare($sql_dato33);
    $found33->execute(array());
    
    while($consulta33=$found33->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato33[$consulta33['ccel_date']] = array(
                'ccel_date' 	=> $consulta33['ccel_date'],
                'deniedCall' => $consulta33['deniedCall'],
                );	
       
    }
    
    
//Drop call
    $sql_dato34="SELECT dropCall,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found34=$base->prepare($sql_dato34);
    $found34->execute(array());
    
    while($consulta34=$found34->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato34[$consulta34['ccel_date']] = array(
                'ccel_date' 	=> $consulta34['ccel_date'],
                'dropCall' => $consulta34['dropCall'],
                );	
       
    }
    
//Max Power
    $sql_dato35="SELECT maxPower,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found35=$base->prepare($sql_dato35);
    $found35->execute(array());
    
    while($consulta35=$found35->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato35[$consulta35['ccel_date']] = array(
                'ccel_date' 	=> $consulta35['ccel_date'],
                'maxPower' => $consulta35['maxPower'],
                );	
       
    }
    
//Avg Power
    $sql_dato36="SELECT avgPower,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found36=$base->prepare($sql_dato36);
    $found36->execute(array());
    
    while($consulta36=$found36->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato36[$consulta36['ccel_date']] = array(
                'ccel_date' 	=> $consulta36['ccel_date'],
                'avgPower' => $consulta36['avgPower'],
                );	
       
    }
    
//carga RTWP
    $sql_dato37="SELECT rtwp,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found37=$base->prepare($sql_dato37);
    $found37->execute(array());
    
    while($consulta37=$found37->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato37[$consulta37['ccel_date']] = array(
                'ccel_date' 	=> $consulta37['ccel_date'],
                'rtwp' => $consulta37['rtwp'],
                );	
       
    }
    
//carga noise
    $sql_dato38="SELECT noise,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found38=$base->prepare($sql_dato38);
    $found38->execute(array());
    
    while($consulta38=$found38->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato38[$consulta38['ccel_date']] = array(
                'ccel_date' 	=> $consulta38['ccel_date'],
                'noise'  => $consulta38['noise'],
                );	
       
    }
    
//CS TRAFFIC
    $sql_dato39="SELECT traffic,ccel_date FROM ccel WHERE ccel_sector = '$complemento2' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found39=$base->prepare($sql_dato39);
    $found39->execute(array());
    
    while($consulta39=$found39->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato39[$consulta39['ccel_date']] = array(
                'ccel_date' 	=> $consulta39['ccel_date'],
                'traffic'  => $consulta39['traffic'],
                );	
       
    }
  
    
    
    
    
///////////////////////////////////////////////////////////COMPLEMENTO 3  /////////////////////////////////////////////////////////////////////
   
//Avail
    $sql_dato40="SELECT avail,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found40=$base->prepare($sql_dato40);
    $found40->execute(array());
    
    while($consulta40=$found40->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato40[$consulta40['ccel_date']] = array(
                'ccel_date' 	=> $consulta40['ccel_date'],
                'avail' 	=> $consulta40['avail'],
                );	

    }
//RRC Success
    $sql_dato41="SELECT rrcSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found41=$base->prepare($sql_dato41);
    $found41->execute(array());
    
    while($consulta41=$found41->fetch(PDO::FETCH_ASSOC))
    {
       
        $arrayDato41[$consulta41['ccel_date']] = array(
                'ccel_date' 	=> $consulta41['ccel_date'],
                'rrcSuccess'=> $consulta41['rrcSuccess'],
                );	

    }
//RAB voice success
    $sql_dato42="SELECT rabSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found42=$base->prepare($sql_dato42);
    $found42->execute(array());
    
    while($consulta42=$found42->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato42[$consulta42['ccel_date']] = array(
                'ccel_date' 	=> $consulta42['ccel_date'],
                'rabSuccess' => $consulta42['rabSuccess'],
                );	
       
    }

//Code success
    $sql_dato43="SELECT codeSuccess,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found43=$base->prepare($sql_dato43);
    $found43->execute(array());
    
    while($consulta43=$found43->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato43[$consulta43['ccel_date']] = array(
                'ccel_date' 	=> $consulta43['ccel_date'],
                'codeSuccess' => $consulta43['codeSuccess'],
                );	
       
    }
    
//Usuarios DCH DL
    $sql_dato44="SELECT usuariosDl, ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found44=$base->prepare($sql_dato44);
    $found44->execute(array());
    
    while($consulta44=$found44->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato44[$consulta44['ccel_date']] = array(
                'ccel_date' 	=> $consulta44['ccel_date'],
                'usuariosDl' => $consulta44['usuariosDl'],
                );	
       
    }
    


//Usuarios DCH UL
    $sql_dato45="SELECT usuariosUl,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found45=$base->prepare($sql_dato45);
    $found45->execute(array());
    
    while($consulta45=$found45->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato45[$consulta45['ccel_date']] = array(
                'ccel_date' 	=> $consulta45['ccel_date'],
                'usuariosUl' => $consulta45['usuariosUl'],
                );	
       
    }
    
    
//Denied call
    $sql_dato46="SELECT deniedCall,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found46=$base->prepare($sql_dato46);
    $found46->execute(array());
    
    while($consulta46=$found46->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato46[$consulta46['ccel_date']] = array(
                'ccel_date' 	=> $consulta46['ccel_date'],
                'deniedCall' => $consulta46['deniedCall'],
                );	
       
    }
    
    
//Drop call
    $sql_dato47="SELECT dropCall,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found47=$base->prepare($sql_dato47);
    $found47->execute(array());
    
    while($consulta47=$found47->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato47[$consulta47['ccel_date']] = array(
                'ccel_date' 	=> $consulta47['ccel_date'],
                'dropCall' => $consulta47['dropCall'],
                );	
       
    }
    
//Max Power
    $sql_dato48="SELECT maxPower,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found48=$base->prepare($sql_dato48);
    $found48->execute(array());
    
    while($consulta48=$found48->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato48[$consulta48['ccel_date']] = array(
                'ccel_date' 	=> $consulta48['ccel_date'],
                'maxPower' => $consulta48['maxPower'],
                );	
    }
    
//Avg Power
    $sql_dato49="SELECT avgPower,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found49=$base->prepare($sql_dato49);
    $found49->execute(array());
    
    while($consulta49=$found49->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato49[$consulta49['ccel_date']] = array(
                'ccel_date' 	=> $consulta49['ccel_date'],
                'avgPower' => $consulta49['avgPower'],
                );	
       
    }
    
//carga RTWP
    $sql_dato50="SELECT rtwp,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found50=$base->prepare($sql_dato50);
    $found50->execute(array());
    
    while($consulta50=$found50->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato50[$consulta50['ccel_date']] = array(
                'ccel_date' 	=> $consulta50['ccel_date'],
                'rtwp' => $consulta50['rtwp'],
                );	
       
    }
    
//carga noise
    $sql_dato51="SELECT noise,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found51=$base->prepare($sql_dato51);
    $found51->execute(array());
    
    while($consulta51=$found51->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato51[$consulta51['ccel_date']] = array(
                'ccel_date' 	=> $consulta51['ccel_date'],
                'noise'  => $consulta51['noise'],
                );	
       
    }
    
//CS TRAFFIC
    $sql_dato52="SELECT traffic,ccel_date FROM ccel WHERE ccel_sector = '$complemento3' AND ccel_date BETWEEN '$fecha_i' AND '$fecha_f' ORDER BY ccel_date ASC";
    $found52=$base->prepare($sql_dato52);
    $found52->execute(array());
    
    while($consulta52=$found52->fetch(PDO::FETCH_ASSOC))
    {
        $arrayDato52[$consulta52['ccel_date']] = array(
                'ccel_date' 	=> $consulta52['ccel_date'],
                'traffic'  => $consulta52['traffic'],
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