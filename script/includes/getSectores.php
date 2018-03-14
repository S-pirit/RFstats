<?php
    try
    {
        $base=new PDO("mysql:host=localhost; dbname=rf","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $rnc = $_POST['id_rnc'];

        $sql2="SELECT id_sector FROM sector WHERE id_rnc='$rnc' ORDER BY id_sector";
        $resultado2=$base->prepare($sql2);
        $resultado2->execute(array());
        
        
       
        
        while ($row2=$resultado2->fetch(PDO::FETCH_ASSOC))
        {
		      $html.= "<option value='".$row2['id_sector']."'>".$row2['id_sector']."</option>";
        }
        
    }
        catch(Exception $e)
        {
             die("Algo ha salido mal :c".$e->getMessage());
        }
echo $html;
            
?>