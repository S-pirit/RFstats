<html>
    <head>
        <style>
            *{
                font-family:consolas;
            }
            .wrap{
                display:inline-block;
            }
            
            #import_wrap form{
                border:1px solid black;
                padding:20px;
                width:500px;
                height:120px;
                
            }
            #import_wrap form input{
                margin-bottom:10px;
            }
            button{
                background:none;
                border:1px solid black;
                cursor:pointer;
            }
            button:hover{
                background:black;
                color:white;
            }
            .danger{
                border:1px solid red;
                color:red;
            }
            .danger:hover{
                color:white;
                background:red;
            }
            
        </style>
    </head>
    <body>
        
        <table>
            <tr>
                <button onclick="window.location.href='../index.php'">Pagina Principal</button>
                <h1>Panel de Control</h1>
                <button onclick="window.location.reload();">Recargar</button>
                <h2>Limpiar</h2>
                <td><button  onClick="window.location.href='update/clear_database.php?cod=<?php echo "ccel"; ?>'">Limpiar Ccel</button></td>
                <td><button  onClick="window.location.href='update/clear_database.php?cod=<?php echo "hsdpa"; ?>'">Limpiar HSDPA</button></td>
                <td><button  onClick="window.location.href='update/clear_database.php?cod=<?php echo "lte"; ?>'">Limpiar LTE</button></td>
    
            </tr>    
        </table>
        <br>
        <h2>Importar</h2>
        <div id="import_wrap" class="wrap">
            <form action="import/ccel_import.php?cod=<?php echo "ccel"; ?>" method="post" enctype="multipart/form-data">
                    <p>CCEL</p>
                <input name="files[]" type="file" multiple />
                <br>
                <input type="checkbox" name="comprobar" id="comprobar" class="input_check">
                <label for ="comprobar">Actualizar Sectores</label>
                <button type="submit">Importar CCEL</button>
                
            </form>

            <form action="import/hsdpa_import.php?cod=<?php echo "hsdpa"; ?>" method="post" enctype="multipart/form-data">
                    <p>HSDPA</p>
                <input name="files[]" type="file" multiple />
                <button type="submit">Importar HSDPA</button>
            </form>
            
            <form action="import/lte_import.php?cod=<?php echo "lte"; ?>" method="post" enctype="multipart/form-data">
                    <p>LTE</p>
                <input name="files[]" type="file" multiple />
                <button type="submit">Importar HSDPA</button>
            </form>
        </div>
        <h2>Opciones Avanzadas</h2>
        <button class="danger" onclick="window.location.href='update/clear_all.php'">Clear All DB</button>
        <p>Solo si sabes lo que haces</p>
    </body>
<?php
    
?>
</html>
