 <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart1);
            google.charts.setOnLoadCallback(drawChart2);
            google.charts.setOnLoadCallback(drawChart3);
            google.charts.setOnLoadCallback(drawChart4);
            google.charts.setOnLoadCallback(drawChart5);
            google.charts.setOnLoadCallback(drawChart6);
            google.charts.setOnLoadCallback(drawChart7);
            google.charts.setOnLoadCallback(drawChart8);
            google.charts.setOnLoadCallback(drawChart9);
            google.charts.setOnLoadCallback(drawChart10);
            google.charts.setOnLoadCallback(drawChart11);
            google.charts.setOnLoadCallback(drawChart12);
            google.charts.setOnLoadCallback(drawChart13);
            google.charts.setOnLoadCallback(drawChart14);
            google.charts.setOnLoadCallback(drawChart15);
            google.charts.setOnLoadCallback(drawChart16);
            google.charts.setOnLoadCallback(drawChart17);
            google.charts.setOnLoadCallback(drawChart18);
            google.charts.setOnLoadCallback(drawChart19);
            google.charts.setOnLoadCallback(drawChart20);
            google.charts.setOnLoadCallback(drawChart21);
            google.charts.setOnLoadCallback(drawChart22);
            google.charts.setOnLoadCallback(drawChart23);
            google.charts.setOnLoadCallback(drawChart24);
                
            var options = {'title':'Estadisticas',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
//Crear la tabla de datos grafica 1 deniedHSDPA
          function drawChart1() {
              var data1 = google.visualization.arrayToDataTable([
                ["Dia", "Denied HSDPA"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato1[date("Y-m-d", $i)]["deniedHSDPA"])
                        {
                            $deniedHSDPA = $arrayDato1[date("Y-m-d",$i)]["deniedHSDPA"];
                        }
                        else
                        {
                            $deniedHSDPA=0;
                        }
                       
                      ?> 
                      ['<?php echo date("Y-m-d", $i); ?>', <?php echo $deniedHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);
         
            var options = {'title':'<?php echo $sector_data;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart1 = new google.visualization.LineChart(document.getElementById('chart_sector1'));
                    chart1.draw(data1, options);
          }
        
        
                
                
        
//Crear la tabla de datos grafica 2 USUARIOS DCH
          function drawChart2() {
              var data2 = google.visualization.arrayToDataTable([
                ["Dia", "Drop HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato2[date("Y-m-d", $j)]["dropHSDPA"])
                        {
                            $dropHSDPA = $arrayDato2[date("Y-m-d",$j)]["dropHSDPA"];
                        }
                        else
                        {
                            $dropHSDPA=0;
                        }


                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $dropHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $sector_data ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart2 = new google.visualization.LineChart(document.getElementById('chart_sector2'));
                    chart2.draw(data2, options);

          }
        
                
    
//Crear la tabla de datos grafica 3 DENIED, DROP VOICE
          function drawChart3() {
              var data3 = google.visualization.arrayToDataTable([
                ["Dia", "Thput HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato3[date("Y-m-d", $j)]["thput"])
                        {
                            $thput = $arrayDato3[date("Y-m-d",$j)]["thput"];
                        }
                        else
                        {
                            $thput=0;
                        }
                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $thput;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $sector_data ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart3 = new google.visualization.LineChart(document.getElementById('chart_sector3'));
                    chart3.draw(data3, options);

          }

    
//Crear la tabla de datos grafica 4 POWER
          function drawChart4() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Avg Usr HSUPA", "Avg Usr HSDPA", "Max HSUPA", "Max HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato4[date("Y-m-d", $j)]["avgHSUPA"])
                        {
                            $avgHSUPA = $arrayDato4[date("Y-m-d",$j)]["avgHSUPA"];
                        }
                        else
                        {
                            $avgHSUPA=0;
                        }
                        if($arrayDato5[date("Y-m-d", $j)]["avgHSDPA"])
                        {
                            $avgHSDPA = $arrayDato5[date("Y-m-d",$j)]["avgHSDPA"];
                        }
                        else
                        {
                            $avgHSDPA=0;
                        }
                        if($arrayDato6[date("Y-m-d", $j)]["maxHSUPA"])
                        {
                            $maxHSUPA = $arrayDato6[date("Y-m-d",$j)]["maxHSUPA"];
                        }
                        else
                        {
                            $maxHSUPA=0;
                        }
                        if($arrayDato7[date("Y-m-d", $j)]["maxHSDPA"])
                        {
                            $maxHSDPA = $arrayDato7[date("Y-m-d",$j)]["maxHSDPA"];
                        }
                        else
                        {
                            $maxHSDPA=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $avgHSUPA;?>, <?php echo $avgHSDPA;?>,<?php echo $maxHSUPA;?>,<?php echo $maxHSDPA;?>,],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $sector_data ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart4 = new google.visualization.LineChart(document.getElementById("chart_sector4"));
                    chart4.draw(data4, options);

          }
                
     
//---------------------------------------------------------------------------------------------------------Complemento1
          function drawChart5() {
              var data1 = google.visualization.arrayToDataTable([
                ["Dia", "Denied HSDPA"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato8[date("Y-m-d", $i)]["deniedHSDPA"])
                        {
                            $deniedHSDPA = $arrayDato8[date("Y-m-d",$i)]["deniedHSDPA"];
                        }
                        else
                        {
                            $deniedHSDPA=0;
                        }
                       
                      ?> 
                      ['<?php echo date("Y-m-d", $i); ?>', <?php echo $deniedHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);
         
            var options = {'title':'<?php echo $complemento1 ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart1 = new google.visualization.LineChart(document.getElementById('chart_complemento1'));
                    chart1.draw(data1, options);
          }
        
        
                
                
        
//Crear la tabla de datos grafica 2 USUARIOS DCH
          function drawChart6() {
              var data2 = google.visualization.arrayToDataTable([
                ["Dia", "Drop HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato9[date("Y-m-d", $j)]["dropHSDPA"])
                        {
                            $dropHSDPA = $arrayDato9[date("Y-m-d",$j)]["dropHSDPA"];
                        }
                        else
                        {
                            $dropHSDPA=0;
                        }


                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $dropHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento1 ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart2 = new google.visualization.LineChart(document.getElementById('chart_complemento2'));
                    chart2.draw(data2, options);

          }
        
                
    
//Crear la tabla de datos grafica 3 DENIED, DROP VOICE
          function drawChart7() {
              var data3 = google.visualization.arrayToDataTable([
                ["Dia", "Thput HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato10[date("Y-m-d", $j)]["thput"])
                        {
                            $thput = $arrayDato10[date("Y-m-d",$j)]["thput"];
                        }
                        else
                        {
                            $thput=0;
                        }
                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $thput;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento1 ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart3 = new google.visualization.LineChart(document.getElementById('chart_complemento3'));
                    chart3.draw(data3, options);

          }

    
//Crear la tabla de datos grafica 4 POWER
          function drawChart8() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Avg Usr HSUPA", "Avg Usr HSDPA", "Max HSUPA", "Max HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato11[date("Y-m-d", $j)]["avgHSUPA"])
                        {
                            $avgHSUPA = $arrayDato11[date("Y-m-d",$j)]["avgHSUPA"];
                        }
                        else
                        {
                            $avgHSUPA=0;
                        }
                        if($arrayDato12[date("Y-m-d", $j)]["avgHSDPA"])
                        {
                            $avgHSDPA = $arrayDato12[date("Y-m-d",$j)]["avgHSDPA"];
                        }
                        else
                        {
                            $avgHSDPA=0;
                        }
                        if($arrayDato13[date("Y-m-d", $j)]["maxHSUPA"])
                        {
                            $maxHSUPA = $arrayDato13[date("Y-m-d",$j)]["maxHSUPA"];
                        }
                        else
                        {
                            $maxHSUPA=0;
                        }
                        if($arrayDato14[date("Y-m-d", $j)]["maxHSDPA"])
                        {
                            $maxHSDPA = $arrayDato14[date("Y-m-d",$j)]["maxHSDPA"];
                        }
                        else
                        {
                            $maxHSDPA=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $avgHSUPA;?>, <?php echo $avgHSDPA;?>,<?php echo $maxHSUPA;?>,<?php echo $maxHSDPA;?>,],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento1 ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart4 = new google.visualization.LineChart(document.getElementById("chart_complemento4"));
                    chart4.draw(data4, options);

          }
                
     
     
     
   
//---------------------------------------------------------------------------------------------------------Complemento2
          function drawChart9() {
              var data1 = google.visualization.arrayToDataTable([
                ["Dia", "Denied HSDPA"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato15[date("Y-m-d", $i)]["deniedHSDPA"])
                        {
                            $deniedHSDPA = $arrayDato15[date("Y-m-d",$i)]["deniedHSDPA"];
                        }
                        else
                        {
                            $deniedHSDPA=0;
                        }
                       
                      ?> 
                      ['<?php echo date("Y-m-d", $i); ?>', <?php echo $deniedHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);
         
            var options = {'title':'<?php echo $complemento2 ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart1 = new google.visualization.LineChart(document.getElementById('chart_complemento7'));
                    chart1.draw(data1, options);
          }
        
        
                
                
        
//Crear la tabla de datos grafica 2 USUARIOS DCH
          function drawChart10() {
              var data2 = google.visualization.arrayToDataTable([
                ["Dia", "Drop HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato16[date("Y-m-d", $j)]["dropHSDPA"])
                        {
                            $dropHSDPA = $arrayDato16[date("Y-m-d",$j)]["dropHSDPA"];
                        }
                        else
                        {
                            $dropHSDPA=0;
                        }


                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $dropHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento2 ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart2 = new google.visualization.LineChart(document.getElementById('chart_complemento8'));
                    chart2.draw(data2, options);

          }
        
                
    
//Crear la tabla de datos grafica 3 DENIED, DROP VOICE
          function drawChart11() {
              var data3 = google.visualization.arrayToDataTable([
                ["Dia", "Thput HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato17[date("Y-m-d", $j)]["thput"])
                        {
                            $thput = $arrayDato17[date("Y-m-d",$j)]["thput"];
                        }
                        else
                        {
                            $thput=0;
                        }
                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $thput;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento2 ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart3 = new google.visualization.LineChart(document.getElementById('chart_complemento9'));
                    chart3.draw(data3, options);

          }

    
//Crear la tabla de datos grafica 4 POWER
          function drawChart12() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Avg Usr HSUPA", "Avg Usr HSDPA", "Max HSUPA", "Max HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato18[date("Y-m-d", $j)]["avgHSUPA"])
                        {
                            $avgHSUPA = $arrayDato18[date("Y-m-d",$j)]["avgHSUPA"];
                        }
                        else
                        {
                            $avgHSUPA=0;
                        }
                        if($arrayDato19[date("Y-m-d", $j)]["avgHSDPA"])
                        {
                            $avgHSDPA = $arrayDato19[date("Y-m-d",$j)]["avgHSDPA"];
                        }
                        else
                        {
                            $avgHSDPA=0;
                        }
                        if($arrayDato20[date("Y-m-d", $j)]["maxHSUPA"])
                        {
                            $maxHSUPA = $arrayDato20[date("Y-m-d",$j)]["maxHSUPA"];
                        }
                        else
                        {
                            $maxHSUPA=0;
                        }
                        if($arrayDato21[date("Y-m-d", $j)]["maxHSDPA"])
                        {
                            $maxHSDPA = $arrayDato21[date("Y-m-d",$j)]["maxHSDPA"];
                        }
                        else
                        {
                            $maxHSDPA=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $avgHSUPA;?>, <?php echo $avgHSDPA;?>,<?php echo $maxHSUPA;?>,<?php echo $maxHSDPA;?>,],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento2 ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart4 = new google.visualization.LineChart(document.getElementById("chart_complemento10"));
                    chart4.draw(data4, options);

          }
     
             
     
     
         
     
   
//---------------------------------------------------------------------------------------------------------Complemento3
          function drawChart13() {
              var data1 = google.visualization.arrayToDataTable([
                ["Dia", "Denied HSDPA"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato22[date("Y-m-d", $i)]["deniedHSDPA"])
                        {
                            $deniedHSDPA = $arrayDato22[date("Y-m-d",$i)]["deniedHSDPA"];
                        }
                        else
                        {
                            $deniedHSDPA=0;
                        }
                       
                      ?> 
                      ['<?php echo date("Y-m-d", $i); ?>', <?php echo $deniedHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);
         
            var options = {'title':'<?php echo $complemento2 ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart1 = new google.visualization.LineChart(document.getElementById('chart_complemento13'));
                    chart1.draw(data1, options);
          }
        
        
                
                
        
//Crear la tabla de datos grafica 2 USUARIOS DCH
          function drawChart14() {
              var data2 = google.visualization.arrayToDataTable([
                ["Dia", "Drop HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato23[date("Y-m-d", $j)]["dropHSDPA"])
                        {
                            $dropHSDPA = $arrayDato23[date("Y-m-d",$j)]["dropHSDPA"];
                        }
                        else
                        {
                            $dropHSDPA=0;
                        }


                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $dropHSDPA;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento2 ;?>',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart2 = new google.visualization.LineChart(document.getElementById('chart_complemento14'));
                    chart2.draw(data2, options);

          }
        
                
    
//Crear la tabla de datos grafica 3 DENIED, DROP VOICE
          function drawChart15() {
              var data3 = google.visualization.arrayToDataTable([
                ["Dia", "Thput HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato24[date("Y-m-d", $j)]["thput"])
                        {
                            $thput = $arrayDato24[date("Y-m-d",$j)]["thput"];
                        }
                        else
                        {
                            $thput=0;
                        }
                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $thput;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento2 ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart3 = new google.visualization.LineChart(document.getElementById('chart_complemento15'));
                    chart3.draw(data3, options);

          }

    
//Crear la tabla de datos grafica 4 POWER
          function drawChart16() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Avg Usr HSUPA", "Avg Usr HSDPA", "Max HSUPA", "Max HSDPA"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato25[date("Y-m-d", $j)]["avgHSUPA"])
                        {
                            $avgHSUPA = $arrayDato25[date("Y-m-d",$j)]["avgHSUPA"];
                        }
                        else
                        {
                            $avgHSUPA=0;
                        }
                        if($arrayDato26[date("Y-m-d", $j)]["avgHSDPA"])
                        {
                            $avgHSDPA = $arrayDato26[date("Y-m-d",$j)]["avgHSDPA"];
                        }
                        else
                        {
                            $avgHSDPA=0;
                        }
                        if($arrayDato27[date("Y-m-d", $j)]["maxHSUPA"])
                        {
                            $maxHSUPA = $arrayDato27[date("Y-m-d",$j)]["maxHSUPA"];
                        }
                        else
                        {
                            $maxHSUPA=0;
                        }
                        if($arrayDato28[date("Y-m-d", $j)]["maxHSDPA"])
                        {
                            $maxHSDPA = $arrayDato28[date("Y-m-d",$j)]["maxHSDPA"];
                        }
                        else
                        {
                            $maxHSDPA=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $avgHSUPA;?>, <?php echo $avgHSDPA;?>,<?php echo $maxHSUPA;?>,<?php echo $maxHSDPA;?>,],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'<?php echo $complemento2 ;?>',
                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart4 = new google.visualization.LineChart(document.getElementById("chart_complemento16"));
                    chart4.draw(data4, options);

          }
     
             
    </script>