<?php  
foreach($_FILES["files"]["tmp_name"] as $key => $tmp_name)
    {
        if($_FILES["files"]["name"][$key])
        {
            $filename= $_FILES["files"]["name"][$key];
            $source = $_FILES["files"]["tmp_name"][$key];
            $directorio=$tipoArchivo."/";
            
            $dir=opendir($directorio);
            $path=$directorio. '/' .$filename;
            
            if(move_uploaded_file($source, $path))
            {
                  print_r($filename);
                echo": Alamcenado <br>";
            }
            else
            {
                echo"-> Error al almacenar en el servidor";
            }
            closedir($dir);
        }
    }
    ?>