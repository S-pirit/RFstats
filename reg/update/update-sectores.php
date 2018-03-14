<html>
    <title>Reporte update</title>
    <button onClick="window.history.go(-1)">Volver</button>
<?php
    require "../PHPExcel/IOFactory.php";
    try
    {
        $base=new PDO("mysql:host=localhost; dbname=rf", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
    }
   catch(Exception $e)
    {
        die("Algo ha salido mal con la base de datos :c".$e->getMessage());
   
    }    
  


$directorio = opendir("../import/CCEL/"); //ruta actual
//Numero de la primera fila en el libro
$x=6;

while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
       
    }
    else
    {

        
        echo "<h1>Archivo: ".$archivo . "</h1><br />";
        $nombreArchivo=$archivo;
      
        $objPHPExcel=PHPEXCEL_IOFactory::load("../import/CCEL/".$nombreArchivo);

        $objPHPExcel->setActiveSheetIndex(0);
        $numRows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
        
        
        echo"<h3>RNC agregados</h3>";
       //Comprobar si no existe la RNC y agregarla
        for ($i=$x; $i<=$numRows; $i++)
        {
            $RNC=$objPHPExcel->getActiveSheet()->getCell("A".$i)->getCalculatedValue();
            $sector=$objPHPExcel->getActiveSheet()->getCell("B".$i)->getCalculatedValue();
     
            
     
            
            $consulta1="SELECT COUNT(*) as data1 FROM rnc WHERE id_rnc = '".$RNC."'";
            $encontrado1=$base->prepare($consulta1) ;
            $encontrado1->execute(array());
            
    
            $respuesta1=$encontrado1->fetch(PDO::FETCH_ASSOC);
       
            
            if($respuesta1["data1"]=="0")
            {
                echo $RNC."<br>";
                $sql3="INSERT INTO rnc values('$RNC')";
                $resultado3=$base->prepare($sql3);
                $resultado3->execute(array());
                $resultado3->CloseCursor();
            }
        }
        echo"<h3>Sectores agregados</h3>";
           //Comprobar si no existe el sector y agregarlo
         for ($i=$x; $i<=$numRows; $i++)
        {
            $RNC=$objPHPExcel->getActiveSheet()->getCell("A".$i)->getCalculatedValue();
            $sector=$objPHPExcel->getActiveSheet()->getCell("B".$i)->getCalculatedValue();
             
         
            
            $consulta="SELECT COUNT(*) as data FROM sector WHERE id_sector = '".$sector."'";
            $encontrado=$base->prepare($consulta) ;
            $encontrado->execute(array());
            
    
            $respuesta=$encontrado->fetch(PDO::FETCH_ASSOC);
            
            
            
            
            if($respuesta["data"]=="0")
            {
                echo "<p>".$respuesta["data"]."</p>";
                echo "   <br>  ".$sector;
                $sql2="INSERT INTO sector values('$sector', '$RNC')";
                $resultado2=$base->prepare($sql2);
                $resultado2->execute(array());
                $resultado2->CloseCursor();
                
                
            }
 
        }
}
}



?>
    </html>