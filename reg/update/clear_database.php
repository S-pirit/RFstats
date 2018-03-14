<html>
<?php
    try{
        require"../connection.php";
        
        $sector=$_REQUEST["cod"];
        
        $sql="DELETE FROM ".$sector;
        $result=$base->prepare($sql);
        $result->execute(array());
        $result->closeCursor();
        
        //Eliminar archivos
        $directorio;
        $ruta;
        if ($sector=="ccel")
        {
            $directorio="../import/CCEL/";
            $ruta = opendir("../import/CCEL/"); //ruta actual
        }
        else if($sector=="hsdpa")
        {
            $directorio="../import/HSDPA/";
            $ruta= opendir("../import/HSDPA/");
        }
        else if($sector=="usrdch")
        {
            $directorio="../import/LTE/";
            $ruta= opendir("../import/LTE/");
        }
        else
        {
            echo "No se encuentra la carpeta para".$sector;
        }
        
        
        
            while ($archivo = readdir($ruta)) //obtenemos un archivo y luego otro sucesivamente
            {

                if (realpath($archivo))//verificamos si es o no un directorio
                {
               
                }
                else
                {
                        unlink($directorio.$archivo);
                }
            }
        }
   catch(Exception $e)
    {
        die("Algo ha salido mal :c".$e->getMessage());
    }    
?>
<script>
alert("Registros de (<?php echo $sector; ?>) eliminados");
window.history.go(-1);
</script>
    </html>