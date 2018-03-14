<!DOCTYPE html>
   <?php $tipoArchivo=$_REQUEST["cod"];?>
<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="../css/index-style.css">
        <link type="text/css" rel="stylesheet" href="../css/cards_style.css">
        <link type="text/css" rel="stylesheet" href="../css/console.css">
         <title>RFstats</title>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        
    </head>
    <body>
<!--Menu ---------------------------------->
    <div id="wrap">
       
	    <header>
            <div id="head">
                <div id="card1">
                    <img src="../images/settings.png"; onclick="window.location.href='../reg/admin_index.php'">
                    <h1>RF Stats - Diseno Celular</h1>
                    <div class="console">
                        <?php
                        error_reporting(E_ALL & ~ E_NOTICE);
                    //Recibir datos para el select, 
                        require "includes/getSelect.php";
                    //Recibir datos para las graficas
                        require "includes/getComplementos.php";
                        require "../graficas/getInfo/info_".$tipoArchivo.".php";
                        //Script para crear las graficas-->
                        require "../graficas/getCharts/getCharts_".$tipoArchivo.".php";
                        ?>
                    </div>
                </div>  
            </div>            
                   
            <div id="cardsContainer">

                <div id="card2" class="cards">
                    <h3 >Estadisticas Voz</h3>
                    <div id="subCard">
                        <button onclick='window.location.href="complementos_index.php?cod=<?php echo 'ccel';?>"'>Complementos</button>
                        <button onclick='window.location.href="../index.php?cod=<?php echo "ccel"?>"'>Sector</button>
                    </div>
                </div> 
                <div id="card4" class="cards" onclick='window.location.href="../index.php?cod=<?php echo "hsdpa";?>"'>
                    <h3>Estadisticas HSDPA</h3>
                </div> 
                <div id="card7" class="cards">
                    <h3>Estadisticas LTE</h3>
                </div> 
                <div id="card6" class="cards" onclick="window.open('../reg/help.php')">
                     <h3>Ayuda</h3>
                </div> 
                <div id="card5" class="cards" onclick="window.open('../credits/index/index.html')">
                    <h3>Acerca de...</h3>
                </div> 
                <div id="card6" class="cards">
                    
                </div>
            </div>
        </header>
        
        <main>
<!--Select-------------------------------------------------------->
                <div id="sectores-container" align=center>
                    <H2><?php echo $_REQUEST["cod"];?> Complementos</H2>
                    <form id="form_select" action="complementos_index.php?cod=<?php echo $tipoArchivo;?>" method="post">
                        <select id="select-rnc" name="select-rnc">
                            <option>Seleccionar RNC</option>

                            <?php while($row=$resultado->fetch(PDO::FETCH_ASSOC)) { ?>

                                <option value="<?php echo $row['id_rnc'] ;?>"><?php echo $row['id_rnc'];?> </option>

                            <?php }?>
                        </select>

                        <select id="select-sector" name="select-sector">
                            
                        </select>
                        <input type="date" name="fecha_i" placeholder="Fecha inicio" value="<?php echo $fechaAntigua ;?>">
                        <input type="date" name="fecha_f" placeholder="Fecha final" value="<?php echo $fechaReciente; ?>">
                        <button type="submit">Generar Graficos</button>
                    </form>
                </div>
            
<!--Charts---------------------------------------------------------->
            <div id="chartContainer">
                  
                        <h2><?php echo $sector_data; ?></h2>
                <div class="chartGroup">
                    <div align=center id="chart_sector1" class="chart"></div>
                    <div align=center id="chart_sector2" class="chart"></div>
                </div>

                <div class="chartGroup">
                    <div align=center id="chart_sector3" class="chart"></div>
                    <div align=center id="chart_sector4" class="chart"></div>
                </div>
               
                <div class="chartGroup">
                    <div align=center id="chart_sector5" class="chart"></div>
                    <div align=center id="chart_sector6" class="chart"></div>
                </div>
                
                
                    <h2><?php echo $complemento1;?></h2>
                <div class="chartGroup">
                    <div align=center id="chart_complemento1" class="chart"></div>
                    <div align=center id="chart_complemento2" class="chart"></div>
                </div>
                <div class="chartGroup">
                    <div align=center id="chart_complemento3" class="chart"></div>
                    <div align=center id="chart_complemento4" class="chart"></div>
                </div>
                <div class="chartGroup">
                    <div align=center id="chart_complemento5" class="chart"></div>
                    <div align=center id="chart_complemento6" class="chart"></div>
                </div>
                
                    <h2><?php echo $complemento2;?></h2>
                <div class="chartGroup">
                    <div align=center id="chart_complemento7" class="chart"></div>
                    <div align=center id="chart_complemento8" class="chart"></div>
                </div>
                <div class="chartGroup">
                    <div align=center id="chart_complemento9" class="chart"></div>
                    <div align=center id="chart_complemento10" class="chart"></div>
                </div>
                <div class="chartGroup">
                    <div align=center id="chart_complemento11" class="chart"></div>
                    <div align=center id="chart_complemento12" class="chart"></div>
                </div>
                
                    <h2><?php echo $complemento3;?></h2>
                <div class="chartGroup">
                    <div align=center id="chart_complemento13" class="chart"></div>
                    <div align=center id="chart_complemento14" class="chart"></div>
                </div>
                <div class="chartGroup">
                    <div align=center id="chart_complemento15" class="chart"></div>
                    <div align=center id="chart_complemento16" class="chart"></div>
                </div>
                <div class="chartGroup">
                    <div align=center id="chart_complemento17" class="chart"></div>
                    <div align=center id="chart_complemento18" class="chart"></div>
                </div>
            </div>
        
        </main>
    <footer>
        <center><p>Comcel S.A. © 2018</p></center>
    </footer>

    <div id="add">
        <img src="../images/plus.svg" onclick="window.open('../reg/update/sector_index.php')">
    </div>
     </div>
    </body>
   
    <script type="text/javascript" src="../script/jquery.js"></script>
    <script type="text/javascript" src="../script/index-script.js"></script>
    <script type="text/javascript" src="../script/scroll_script.js"></script>
    <script type="text/javascript" src="includes/select.js"></script>
</html>