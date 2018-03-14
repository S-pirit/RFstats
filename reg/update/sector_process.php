<script>
    function success(){
        alert("El registro se agregó correctamente");
        window.history.go(-1);
    }
</script>
<?php

    $rnc=$_POST["rnc"];
    $sector=$_POST["sector_n"];

    try
    {
        $base=new PDO("mysql:host=localhost; dbname=rf", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        
        $sql="INSERT INTO sector (id_sector, id_rnc) values(:nam, :rnc)";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(
                                ":nam"=>$sector,
                                ":rnc"=>$rnc
                                    ));
        $resultado->CloseCursor();
        ?><?php
    }
    catch(Exception $e)
    {
        die("Algo ha salido mal :c  ".$e->getMessage());
    }  



?>
