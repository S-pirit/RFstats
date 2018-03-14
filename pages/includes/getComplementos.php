<?php
    include "../reg/connection.php";
    $sector_data=$_POST["select-sector"];
    $fecha_i=$_POST["fecha_i"];
    $fecha_f=$_POST["fecha_f"];
    
    //Buscar sectores complementarios
    $sectorArray=str_split($sector_data);

    $sectorLength=count($sectorArray);
    unset($sectorArray[$sectorLength-1]);

    $sectorLenght=count($sectorArray);
    //Sector I
    $sectorI = $sectorArray;
    $sectorI[$sectorLength]="I";
    $sectorK = $sectorArray;
    $sectorK[$sectorLenght]= "K";
    $sectorJ = $sectorArray;
    $sectorJ[$sectorLenght] = "J";
    $sectorO=$sectorArray;
    $sectorO[$sectorLenght] = "O";
    $sectorP=$sectorArray;
    $sectorP[$sectorLenght] = "P";
    $sectorQ=$sectorArray;
    $sectorQ[$sectorLenght] = "Q";
    $sectorY1=$sectorArray;
    $sectorY1[$sectorLenght] = "Y1";
    $sectorY2=$sectorArray;
    $sectorY2[$sectorLenght] = "Y2";
    $sectorY3=$sectorArray;
    $sectorY3[$sectorLenght] = "Y3";
    
    $sectorI=implode($sectorI);
    $sectorJ=implode($sectorJ);
    $sectorK=implode($sectorK);
    $sectorO=implode($sectorO);
    $sectorP=implode($sectorP);
    $sectorQ=implode($sectorQ);
    $sectorY1=implode($sectorY1);
    $sectorY2=implode($sectorY2);
    $sectorY3=implode($sectorY3);
    
    $sectorArray=implode($sectorArray);
    
    
    $sectorOriginal=str_split($sector_data);
    $complemento1;
    if($sectorOriginal[$sectorLenght]=="X")
    {
        $complemento1=$sectorI;
        $complemento2=$sectorO;
        $complemento3=$sectorY1;
    }
    else if($sectorOriginal[$sectorLenght]=="Y")
    {
        $complemento1=$sectorJ;
        $complemento2=$sectorP;
        $complemento3=$sectorY2;
    }
    else if($sectorOriginal[$sectorLenght]=="Z")
    {
        $complemento1=$sectorK;
        $complemento2=$sectorQ;
        $complemento3=$sectorY3;
    }
    else
    {
        echo ("<p class='error'>Sector equivocado para buscar complementos</p>");
    }
    echo $complemento1."<br>";
    echo $complemento2."<br>";
    echo $complemento3."<br>";
   ?>