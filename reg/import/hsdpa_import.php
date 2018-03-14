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
    exec ("hsdpaConvert.xlsm");
    sleep(10);
//Importar archivos a base de datos    
    ?><h1>Archivos Importados:</h1><?php
    
$ruta = opendir("HSDPA/"); //ruta actual
while ($archivo = readdir($ruta)) //obtenemos un archivo y luego otro sucesivamente
{
    
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
      
    }
    else
    {
        $nombreArchivo="HSDPA/".$archivo;

//Obtener fecha y convertirla al formato ymd
        require "includes/getFecha_hsdpa.php";
        echo"<br>" . $archivo . "<br />";
        $csvFile = fopen($nombreArchivo, "r");
        fgetcsv($csvFile);
        while($column=fgetcsv($csvFile, "r"))
        {
            $hsdpa_rnc=$column[1];
            $hsdpa_sector=$column[3];
            $deniedHSDPA=$column[7];
            $dropHSDPA=$column[10];
            $thput=$column[14];
            $avgHSUPA=$column[23];
            $avgHSDPA=$column[24];
            $maxHSUPA=$column[25];
            $maxHSDPA=$column[26];
            
            $sql="INSERT INTO hsdpa values('','$hsdpa_rnc','$hsdpa_sector','$dateString', '$deniedHSDPA', '$dropHSDPA','$thput','$avgHSUPA','$avgHSDPA','$maxHSUPA','$maxHSDPA')";
     
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