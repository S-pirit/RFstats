<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/index-style.css">
        <link type="text/css" rel="stylesheet" href="css/console.css">
        <link type="text/css" rel="stylesheet" href="css/cards_style.css">
        <title>RFstats</title>
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        
    </head>
    <body>
<!--Menu ---------------------------------->
    <div id="wrap">
       
	    <header>
            <div id="head">
                <div id="card1">
                    <img src="images/settings.png"; onclick="window.location.href='reg/admin_index.php'">
                    <h1>RF Stats - Diseno Celular</h1>
                    <div class='console'>
                    <?php //Recibir datos para el select
                         error_reporting(E_ALL & ~ E_NOTICE);
                    try
                    {
                    require "reg/connection.php";

                        $sql="SELECT * FROM rnc ORDER BY id_rnc ASC";
                        $resultado=$base->prepare($sql);
                        $resultado->execute(array());
                    }
                    catch(Exception $e)
                    {
                         die("Algo ha salido mal :c".$e->getMessage());
                    }

                    //Seleccionar fechas
                        $sql2="SELECT MAX(ccel_date) as maxFecha FROM ccel";
                        $resul=$base->prepare($sql2);
                        $resul->execute(array());
                        while($fecha1=$resul->fetch(PDO::FETCH_ASSOC))
                        {
                            $fechaReciente= $fecha1["maxFecha"];

                        }
                        $sql3="SELECT MIN(ccel_date) as minFecha FROM ccel";
                        $resul2=$base->prepare($sql3);
                        $resul2->execute(array());

                        $fecha2=$resul2->fetch(PDO::FETCH_ASSOC);
                        $fechaAntigua=$fecha2["minFecha"];

                     //Recibir datos para las graficas
                    require "graficas/getInfo/info_ccel_1sec.php";
                    //Script para crear las graficas-->
                    require "graficas/getCharts/ccel_1sec.php";
                    ?>
                    </div>
                    
                </div>  
            </div>            
                   
            <div id="cardsContainer">

                <div id="card2" class="cards">
                    <h3 >Estadisticas Voz</h3>
                    <div id="subCard">
                        <button onclick='window.location.href="pages/complementos_index.php?cod=<?php echo 'ccel';?>"'>Complementos</button>
                        <button onclick='window.location.href="index.php?cod=<?php echo 'ccel';?>"'>Sector</button>
                    </div>
                </div> 
                <div id="card3" class="cards" onclick="window.location.href='pages/complementos_index.php?cod=<?php echo "hsdpa"; ?>'">
                    <h3>Estadisticas HSDPA</h3>
                </div> 
                <div id="card4" class="cards">
                    <h3>Estadisticas LTE</h3>
                </div> 
                <div id="card5" class="cards" onclick="window.open('reg/help.php')">
                     <h3>Ayuda</h3>
                </div> 
                <div id="card6" class="cards" onclick="window.open('credits/index/index.html')">
                    <h3>Acerca de...</h3>
                </div> 
                <div id="card7" class="cards">
                </div>
                    <div id="card6" class="cards">
                        <img src="images/lines.png">
                </div> 
            </div>
        </header>
        
        <main>
<!--Form-------------------------------------------------------->
                <div id="sectores-container" align=center>
                    <h2>CCEL Sector Individual</h2>
                    <form id="form_select" action="index.php" method="GET">
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
                    <div align=center id="chart_avail" class="chart"></div>
                    <div align=center id="chart_users" class="chart"></div>
                </div>

                <div class="chartGroup">
                    <div align=center id="chart_call" class="chart"></div>
                    <div align=center id="chart_power" class="chart"></div>
                </div>
               
                <div class="chartGroup">
                    <div align=center id="chart_noise" class="chart"></div>
                    <div align=center id="chart_csTraffic" class="chart"></div>
                </div>
            </div>
 
        </main>

     </div>
    <footer>
        <center><p>Comcel S.A. © 2018</p></center>
    </footer>
    <div id="add">
        <img src="images/plus.svg" onclick="window.open('reg/update/sector_index.php')">
    </div>
    </body>
   
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/scroll_script.js"></script>
    <script type="text/javascript" src="script/index-script.js"></script>
    <script type="text/javascript" src="script/select.js"></script>
</html>