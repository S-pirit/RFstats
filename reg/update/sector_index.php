<html>
    <head>
        <title>Agregar Sector</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../../css/form-style.css">
    </head>
    <body>
        <div id="container">
        <form name="formulario_reg" action="sector_process.php" method="post" align="center" enctype="multipart/form-data">
            <h1 align="center">Agregar Sector</h1>
       
           <div class="input-group"><input type="text" onClick="this.select();" id="nombre" name="sector_n" required> 
            <label class="label" for="nombre">Nombre Sector</label>
            </div>
            <div class="input-group" id="select" required>
                        <select name="rnc" required> 
                            <option>Seleccione la RNC</option>
                            <?php
                                try
                                {
                                    $base=new PDO("mysql:host=localhost; dbname=rf", "root", "");
                                    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $base->exec("SET CHARACTER SET utf8");
                                    
                                    $sql="SELECT * FROM rnc";
                                    $resul=$base->prepare($sql);
                                    $resul->execute(array());
                                    while ($consulta=$resul->fetch(PDO::FETCH_ASSOC))
                                    {
                                        echo"<option required value='".$consulta['id_rnc']."'>".$consulta['id_rnc']."</option>";
                                    }
                                }
                                catch(Exception $e)
                                {
                                    die("Algo ha salido mal :c".$e->getMessage());
                                }
                            ?>
                        </select>
           </div>
            
<!--Checkbox y button-->
            <div class="input-check" align=center>
                <input type="checkbox" value="update-sector" name="update" id="check">
                <label for="check">Actualizar RNC-Sectores</label>
            </div>
            
            <div class="button">
            <button type="submit" >Enviar</button> 
            </div>
            
            <div id="foot">
            <center><p>Por favor asegurese de escribir el nombre correctamente, este registro se convertirá en una llave primaria.</p></center>
            </div>
        </form>
        </div>
        
        
        <script type="text/javascript" src="../../script/forms.js"></script>
    </body>
    
</html>