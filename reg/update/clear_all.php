<?php
    try{
        $base=new PDO("mysql:host=localhost; dbname=rf","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql="SET foreign_key_checks = 0; TRUNCATE TABLE ccel; TRUNCATE TABLE sector; TRUNCATE TABLE rnc; TRUNCATE TABLE hsdpa; TRUNCATE TABLE lte";
        $result=$base->prepare($sql);
        $result->execute(array());
        $result->closeCursor();
        
    }
   catch(Exception $e)
    {
        die("Algo ha salido mal :c".$e->getMessage());
    }    
?>

<script>
    window.history.go(-1);
</script>