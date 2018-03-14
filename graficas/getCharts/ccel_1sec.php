<script>
google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart2);
            google.charts.setOnLoadCallback(drawChart1);
            google.charts.setOnLoadCallback(drawChart3);
            google.charts.setOnLoadCallback(drawChart4);
            google.charts.setOnLoadCallback(drawChart5);
            google.charts.setOnLoadCallback(drawChart6);
            google.charts.setOnLoadCallback(drawChart7);
            google.charts.setOnLoadCallback(drawChart8);
            google.charts.setOnLoadCallback(drawChart9);
            google.charts.setOnLoadCallback(drawChart10);
                
            var options = {'title':'Estadisticas',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
//Crear la tabla de datos grafica 1 AVAIL
          function drawChart1() {
              var data1 = google.visualization.arrayToDataTable([
                ["Dia", "%Avail", "%RRC Setup Success", "%Voice Success", "%Code Success"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato1[date("Y-m-d", $i)]["avail"])
                        {
                            $avail = $arrayDato1[date("Y-m-d",$i)]["avail"];
                        }
                        else
                        {
                            $avail=0;
                        }
                        if($arrayDato2[date("Y-m-d", $i)]["rrcSuccess"])
                        {
                            $rrcSuccess = $arrayDato2[date("Y-m-d",$i)]["rrcSuccess"];
                        }
                        else
                        {
                            $rrcSuccess=0;
                        }
                        if($arrayDato3[date("Y-m-d", $i)]["rabSuccess"])
                        {
                            $voiceSuccess = $arrayDato3[date("Y-m-d",$i)]["rabSuccess"];
                        }
                        else
                        {
                            $voiceSuccess=0;
                        }
                        if($arrayDato4[date("Y-m-d", $i)]["codeSuccess"])
                        {
                            $codeSuccess = $arrayDato4[date("Y-m-d",$i)]["codeSuccess"];
                        }
                        else
                        {
                            $codeSuccess=0;
                        }
                      ?> 
                      ['<?php echo date("Y-m-d", $i); ?>', <?php echo $avail;?>, <?php echo $rrcSuccess;?>, <?php echo $voiceSuccess;?>, <?php echo $codeSuccess;?>],
                      <?php 
                    }
                        ?>
              ]);
         
            var options = {'title':'Avail, RRC Succes, Voice Success, Code Success',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart1 = new google.visualization.LineChart(document.getElementById('chart_avail'));
                    chart1.draw(data1, options);
          }
        
        
                
                
        
//Crear la tabla de datos grafica 2 USUARIOS DCH
          function drawChart2() {
              var data2 = google.visualization.arrayToDataTable([
                ["Dia", "UsuariosDCH DL", "UsuariosDCH UL"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato5[date("Y-m-d", $j)]["usuariosDl"])
                        {
                            $usuariosDl = $arrayDato5[date("Y-m-d",$j)]["usuariosDl"];
                        }
                        else
                        {
                            $usuariosDl=0;
                        }
                        if($arrayDato6[date("Y-m-d", $j)]["usuariosUl"])
                        {
                            $usuariosUl = $arrayDato6[date("Y-m-d",$j)]["usuariosUl"];
                        }
                        else
                        {
                            $usuariosUl=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $usuariosDl;?>, <?php echo $usuariosUl;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'Usuarios DCH',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart2 = new google.visualization.LineChart(document.getElementById('chart_users'));
                    chart2.draw(data2, options);

          }
        
                
    
//Crear la tabla de datos grafica 3 DENIED, DROP VOICE
          function drawChart3() {
              var data3 = google.visualization.arrayToDataTable([
                ["Dia", "Denied Call", "Drop Call"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato7[date("Y-m-d", $j)]["deniedCall"])
                        {
                            $deniedCall = $arrayDato7[date("Y-m-d",$j)]["deniedCall"];
                        }
                        else
                        {
                            $deniedCall=0;
                        }
                        if($arrayDato8[date("Y-m-d", $j)]["dropCall"])
                        {
                            $dropCall = $arrayDato8[date("Y-m-d",$j)]["dropCall"];
                        }
                        else
                        {
                            $dropCall=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $deniedCall;?>, <?php echo $dropCall;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'Calls',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart3 = new google.visualization.LineChart(document.getElementById('chart_call'));
                    chart3.draw(data3, options);

          }

    
//Crear la tabla de datos grafica 4 POWER
          function drawChart4() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Max Power", "Avg Power"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato9[date("Y-m-d", $j)]["maxPower"])
                        {
                            $maxPower = $arrayDato9[date("Y-m-d",$j)]["maxPower"];
                        }
                        else
                        {
                            $maxPower=0;
                        }
                        if($arrayDato10[date("Y-m-d", $j)]["avgPower"])
                        {
                            $avgPower = $arrayDato10[date("Y-m-d",$j)]["avgPower"];
                        }
                        else
                        {
                            $avgPower=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $maxPower;?>, <?php echo $avgPower;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'Power',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart4 = new google.visualization.LineChart(document.getElementById('chart_power'));
                    chart4.draw(data4, options);

          }
                
                
//Crear la tabla de datos grafica 5 RTWP y NOISE
          function drawChart5() {
              var data5 = google.visualization.arrayToDataTable([
                ["Dia", "Carga UL RTWP", "Noise Floor"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato11[date("Y-m-d", $j)]["rtwp"])
                        {
                            $rtwp = $arrayDato11[date("Y-m-d",$j)]["rtwp"];
                        }
                        else
                        {
                            $rtwp=0;
                        }
                        if($arrayDato12[date("Y-m-d", $j)]["noise"])
                        {
                            $noise = $arrayDato12[date("Y-m-d",$j)]["noise"];
                        }
                        else
                        {
                            $noise=0;
                        }

                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $rtwp;?>, <?php echo $noise;?>],
                      <?php 
                    }
                        ?>
              ]);

            var options = {'title':'Carga UL RTWP, Noise Floor',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart5 = new google.visualization.LineChart(document.getElementById('chart_noise'));
                    chart5.draw(data5, options);

          }
           
                
//Crear la tabla de datos grafica 6 CS traffic
          function drawChart6() {
              var data6 = google.visualization.arrayToDataTable([
                ["Dia", "CS Traffic"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato13[date("Y-m-d", $j)]["traffic"])
                        {
                            $traffic = $arrayDato13[date("Y-m-d",$j)]["traffic"];
                        }
                        else
                        {
                            $traffic=0;
                        }
                      ?> 
                      ['<?php echo date("Y-m-d", $j); ?>', <?php echo $traffic;?>],
                      <?php 
                    }
                        ?>
              ]);
           
            var options = {'title':'CS Traffic',

                     pointShape:"circle",
                     pointSize:9,
                     tooltip:{textStyle: {color:'red'}}

                    };
          var chart6 = new google.visualization.LineChart(document.getElementById('chart_csTraffic'));
                    chart6.draw(data6, options);

          }
</script>