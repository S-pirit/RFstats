<html>
    <title>Reporte Import</title>
    <button onClick="window.history.go(-1)">Volver</button><br>
    <h1>Archivos Almacenados:</h1>
<?php
    $tipoArchivo=$_REQUEST["cod"];
    require "../connection.php";
    require "../update/clear.php";
    sleep(5);
//Copiar archivos al servidor
    require "includes/copyFiles.php";
//Ejecutar macro convertir en csv
    exec ("ccelConvert.xlsm");
    sleep(10);
//Importar archivos a base de datos    
    ?><h1>Archivos Importados:</h1><?php
    
$ruta = opendir("CCEL/"); //ruta actual
while ($archivo = readdir($ruta)) //obtenemos un archivo y luego otro sucesivamente
{
    
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
      
    }
    else
    {
        $nombreArchivo="CCEL/".$archivo;

//Obtener fecha y convertirla al formato ymd
        require "includes/getFecha_ccel.php";
        echo"<br>" . $archivo . "<br />";
        $csvFile = fopen($nombreArchivo, "r");
        fgetcsv($csvFile);
        fgetcsv($csvFile);
        fgetcsv($csvFile);
        fgetcsv($csvFile);
        fgetcsv($csvFile);
        while($column=fgetcsv($csvFile, "r"))
        {
           
            $RNC=$column[0];
            $sector=$column[1];
            $avail=$column[4];
            $rrc=$column[13];
            $rab=$column[16];
            $denied=$column[17];
            $drop=$column[20];
            $traffic=$column[31];
            $noise=$column[34];
            $maxPower=$column[35];
            $avgPower=$column[36];
            $codeS=$column[46];
            $carga=$column[48];
            $usuariosdl=$column[49];
            $usuariosul=$column[50];
            if(isset($_POST["comprobar"]))
            {
//Comprobar si hay sectores o rnc nuevos <                                
                $consulta="SELECT COUNT(*) as data FROM rnc WHERE id_rnc = '".$RNC."'";
                $encontrado=$base->prepare($consulta) ;
                $encontrado->execute(array());
                $respuesta=$encontrado->fetch(PDO::FETCH_ASSOC);

                if($respuesta["data"]=="0")
                {
                    echo "<br>Nuevo RNC encontrado: ".$RNC;
                    $sql2="INSERT INTO rnc values('$RNC')";
                    $resultado2=$base->prepare($sql2);
                    $resultado2->execute(array());
                    $resultado2->CloseCursor();

                }
                $consulta3="SELECT COUNT(*) as data FROM sector WHERE id_sector = '".$sector."'";
                $encontrado3=$base->prepare($consulta3) ;
                $encontrado3->execute(array());
                $respuesta3=$encontrado3->fetch(PDO::FETCH_ASSOC);

                if($respuesta3["data"]=="0")
                {
                    echo "<br>Nuevo sector encontrado: ".$sector;
                    $sql4="INSERT INTO sector values('$sector', '$RNC')";
                    $resultado4=$base->prepare($sql4);
                    $resultado4->execute(array());
                    $resultado4->CloseCursor();

                }
//Fin comprobar
            
            }
            
            
            $sql="INSERT INTO ccel values('','$RNC','$sector','$dateString', '$avail', '$rrc','$rab','$denied','$drop','$traffic','$noise','$maxPower','$avgPower','$codeS','$carga','$usuariosdl','$usuariosul')";
     
            $resultado=$base->prepare($sql);
            $resultado->execute(array());
            $resultado->CloseCursor();
        }
        fclose($csvFile);
        echo "<br>______________________<br>";
    }
}



?>
</html>