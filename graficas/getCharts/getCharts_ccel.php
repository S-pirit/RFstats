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
          var chart1 = new google.visualization.LineChart(document.getElementById('chart_sector1'));
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
          var chart2 = new google.visualization.LineChart(document.getElementById('chart_sector2'));
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
          var chart3 = new google.visualization.LineChart(document.getElementById('chart_sector3'));
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
          var chart4 = new google.visualization.LineChart(document.getElementById("chart_sector4"));
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
          var chart5 = new google.visualization.LineChart(document.getElementById('chart_sector5'));
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
          var chart6 = new google.visualization.LineChart(document.getElementById('chart_sector6'));
                    chart6.draw(data6, options);

          }
                
    //----------------------------------------------------------------Complemento1
                
    //Avail COMPLEMENTO1
          function drawChart7() {
              var data7 = google.visualization.arrayToDataTable([
                    ["Dia", "%Avail", "%RRC Setup Success", "%Voice Success", "%Code Success"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato14[date("Y-m-d", $i)]["avail"])
                        {
                            $avail = $arrayDato14[date("Y-m-d",$i)]["avail"];
                        }
                        else
                        {
                            $avail=0;
                        }
                        if($arrayDato15[date("Y-m-d", $i)]["rrcSuccess"])
                        {
                            $rrcSuccess = $arrayDato15[date("Y-m-d",$i)]["rrcSuccess"];
                        }
                        else
                        {
                            $rrcSuccess=0;
                        }
                        if($arrayDato16[date("Y-m-d", $i)]["rabSuccess"])
                        {
                            $voiceSuccess = $arrayDato16[date("Y-m-d",$i)]["rabSuccess"];
                        }
                        else
                        {
                            $voiceSuccess=0;
                        }
                        if($arrayDato17[date("Y-m-d", $i)]["codeSuccess"])
                        {
                            $codeSuccess = $arrayDato17[date("Y-m-d",$i)]["codeSuccess"];
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
          var chart7 = new google.visualization.LineChart(document.getElementById('chart_complemento1'));
                    chart7.draw(data7, options);

          }
                
                
 //Usuarios DCH Complemento 1
          function drawChart8() {
              var data8 = google.visualization.arrayToDataTable([
                ["Dia", "UsuariosDCH DL", "UsuariosDCH UL"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato18[date("Y-m-d", $j)]["usuariosDl"])
                        {
                            $usuariosDl = $arrayDato18[date("Y-m-d",$j)]["usuariosDl"];
                        }
                        else
                        {
                            $usuariosDl=0;
                        }
                        if($arrayDato19[date("Y-m-d", $j)]["usuariosUl"])
                        {
                            $usuariosUl = $arrayDato19[date("Y-m-d",$j)]["usuariosUl"];
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
          var chart8 = new google.visualization.LineChart(document.getElementById('chart_complemento2'));
                    chart8.draw(data8, options);

          }
                
// DENIED, DROP VOICE COMPLEMENTO1
          function drawChart9() {
              var data9 = google.visualization.arrayToDataTable([
                ["Dia", "Denied Call", "Drop Call"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato20[date("Y-m-d", $j)]["deniedCall"])
                        {
                            $deniedCall = $arrayDato20[date("Y-m-d",$j)]["deniedCall"];
                        }
                        else
                        {
                            $deniedCall=0;
                        }
                        if($arrayDato21[date("Y-m-d", $j)]["dropCall"])
                        {
                            $dropCall = $arrayDato21[date("Y-m-d",$j)]["dropCall"];
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
          var chart9 = new google.visualization.LineChart(document.getElementById('chart_complemento3'));
                    chart9.draw(data9, options);

          }

    
//Crear la tabla de datos grafica 4 POWER COMPLEMENTO1
          function drawChart10() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Max Power", "Avg Power"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato22[date("Y-m-d", $j)]["maxPower"])
                        {
                            $maxPower = $arrayDato22[date("Y-m-d",$j)]["maxPower"];
                        }
                        else
                        {
                            $maxPower=0;
                        }
                        if($arrayDato23[date("Y-m-d", $j)]["avgPower"])
                        {
                            $avgPower = $arrayDato23[date("Y-m-d",$j)]["avgPower"];
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
          var chart10 = new google.visualization.LineChart(document.getElementById('chart_complemento4'));
                    chart10.draw(data4, options);

          }
                
                
//Crear la tabla de datos grafica 5 RTWP y NOISE COMPLEMENTO1
          function drawChart11() {
              var data5 = google.visualization.arrayToDataTable([
                ["Dia", "Carga UL RTWP", "Noise Floor"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato24[date("Y-m-d", $j)]["rtwp"])
                        {
                            $rtwp = $arrayDato24[date("Y-m-d",$j)]["rtwp"];
                        }
                        else
                        {
                            $rtwp=0;
                        }
                        if($arrayDato25[date("Y-m-d", $j)]["noise"])
                        {
                            $noise = $arrayDato25[date("Y-m-d",$j)]["noise"];
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
          var chart11 = new google.visualization.LineChart(document.getElementById('chart_complemento5'));
                    chart11.draw(data5, options);

          }
           
                
//Crear la tabla de datos grafica 6 CS traffic COMPLEMENTO1
          function drawChart12() {
              var data6 = google.visualization.arrayToDataTable([
                ["Dia", "CS Traffic"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato26[date("Y-m-d", $j)]["traffic"])
                        {
                            $traffic = $arrayDato26[date("Y-m-d",$j)]["traffic"];
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
          var chart6 = new google.visualization.LineChart(document.getElementById('chart_complemento6'));
                    chart6.draw(data6, options);

          }
     
     
     
     
//------------------------------------------------------------------------------------------------------Complemento2         
                
    //Avail COMPLEMENTO1
          function drawChart13() {
              var data7 = google.visualization.arrayToDataTable([
                    ["Dia", "%Avail", "%RRC Setup Success", "%Voice Success", "%Code Success"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato27[date("Y-m-d", $i)]["avail"])
                        {
                            $avail = $arrayDato27[date("Y-m-d",$i)]["avail"];
                        }
                        else
                        {
                            $avail=0;
                        }
                        if($arrayDato28[date("Y-m-d", $i)]["rrcSuccess"])
                        {
                            $rrcSuccess = $arrayDato28[date("Y-m-d",$i)]["rrcSuccess"];
                        }
                        else
                        {
                            $rrcSuccess=0;
                        }
                        if($arrayDato29[date("Y-m-d", $i)]["rabSuccess"])
                        {
                            $voiceSuccess = $arrayDato29[date("Y-m-d",$i)]["rabSuccess"];
                        }
                        else
                        {
                            $voiceSuccess=0;
                        }
                        if($arrayDato30[date("Y-m-d", $i)]["codeSuccess"])
                        {
                            $codeSuccess = $arrayDato30[date("Y-m-d",$i)]["codeSuccess"];
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
          var chart7 = new google.visualization.LineChart(document.getElementById('chart_complemento7'));
                    chart7.draw(data7, options);

          }
                
                
 //Usuarios DCH Complemento 1
          function drawChart14() {
              var data8 = google.visualization.arrayToDataTable([
                ["Dia", "UsuariosDCH DL", "UsuariosDCH UL"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato31[date("Y-m-d", $j)]["usuariosDl"])
                        {
                            $usuariosDl = $arrayDato31[date("Y-m-d",$j)]["usuariosDl"];
                        }
                        else
                        {
                            $usuariosDl=0;
                        }
                        if($arrayDato32[date("Y-m-d", $j)]["usuariosUl"])
                        {
                            $usuariosUl = $arrayDato32[date("Y-m-d",$j)]["usuariosUl"];
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
          var chart8 = new google.visualization.LineChart(document.getElementById('chart_complemento8'));
                    chart8.draw(data8, options);

          }
                
// DENIED, DROP VOICE COMPLEMENTO1
          function drawChart15() {
              var data9 = google.visualization.arrayToDataTable([
                ["Dia", "Denied Call", "Drop Call"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato33[date("Y-m-d", $j)]["deniedCall"])
                        {
                            $deniedCall = $arrayDato33[date("Y-m-d",$j)]["deniedCall"];
                        }
                        else
                        {
                            $deniedCall=0;
                        }
                        if($arrayDato34[date("Y-m-d", $j)]["dropCall"])
                        {
                            $dropCall = $arrayDato34[date("Y-m-d",$j)]["dropCall"];
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
          var chart9 = new google.visualization.LineChart(document.getElementById('chart_complemento9'));
                    chart9.draw(data9, options);

          }

    
//Crear la tabla de datos grafica 4 POWER COMPLEMENTO1
          function drawChart16() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Max Power", "Avg Power"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato35[date("Y-m-d", $j)]["maxPower"])
                        {
                            $maxPower = $arrayDato35[date("Y-m-d",$j)]["maxPower"];
                        }
                        else
                        {
                            $maxPower=0;
                        }
                        if($arrayDato36[date("Y-m-d", $j)]["avgPower"])
                        {
                            $avgPower = $arrayDato36[date("Y-m-d",$j)]["avgPower"];
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
          var chart10 = new google.visualization.LineChart(document.getElementById('chart_complemento10'));
                    chart10.draw(data4, options);

          }
                
                
//Crear la tabla de datos grafica 5 RTWP y NOISE COMPLEMENTO1
          function drawChart17() {
              var data5 = google.visualization.arrayToDataTable([
                ["Dia", "Carga UL RTWP", "Noise Floor"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato37[date("Y-m-d", $j)]["rtwp"])
                        {
                            $rtwp = $arrayDato37[date("Y-m-d",$j)]["rtwp"];
                        }
                        else
                        {
                            $rtwp=0;
                        }
                        if($arrayDato38[date("Y-m-d", $j)]["noise"])
                        {
                            $noise = $arrayDato38[date("Y-m-d",$j)]["noise"];
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
          var chart11 = new google.visualization.LineChart(document.getElementById('chart_complemento11'));
                    chart11.draw(data5, options);

          }
           
                
//Crear la tabla de datos grafica 6 CS traffic COMPLEMENTO1
          function drawChart18() {
              var data6 = google.visualization.arrayToDataTable([
                ["Dia", "CS Traffic"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato39[date("Y-m-d", $j)]["traffic"])
                        {
                            $traffic = $arrayDato39[date("Y-m-d",$j)]["traffic"];
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
          var chart6 = new google.visualization.LineChart(document.getElementById('chart_complemento12'));
                    chart6.draw(data6, options);

          }
        
     
     
//---------------------------------------------------------------------------------------------------------Complemento3       
                
    //Avail COMPLEMENTO1
          function drawChart19() {
              var data7 = google.visualization.arrayToDataTable([
                    ["Dia", "%Avail", "%RRC Setup Success", "%Voice Success", "%Code Success"],
                  <?php
                    for($i=$fechaInicio; $i<=$fechaFin; $i+=86400)
                    {
                        if($arrayDato40[date("Y-m-d", $i)]["avail"])
                        {
                            $avail = $arrayDato40[date("Y-m-d",$i)]["avail"];
                        }
                        else
                        {
                            $avail=0;
                        }
                        if($arrayDato41[date("Y-m-d", $i)]["rrcSuccess"])
                        {
                            $rrcSuccess = $arrayDato41[date("Y-m-d",$i)]["rrcSuccess"];
                        }
                        else
                        {
                            $rrcSuccess=0;
                        }
                        if($arrayDato42[date("Y-m-d", $i)]["rabSuccess"])
                        {
                            $voiceSuccess = $arrayDato42[date("Y-m-d",$i)]["rabSuccess"];
                        }
                        else
                        {
                            $voiceSuccess=0;
                        }
                        if($arrayDato43[date("Y-m-d", $i)]["codeSuccess"])
                        {
                            $codeSuccess = $arrayDato43[date("Y-m-d",$i)]["codeSuccess"];
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
          var chart7 = new google.visualization.LineChart(document.getElementById('chart_complemento13'));
                    chart7.draw(data7, options);

          }
                
                
 //Usuarios DCH Complemento 1
          function drawChart20() {
              var data8 = google.visualization.arrayToDataTable([
                ["Dia", "UsuariosDCH DL", "UsuariosDCH UL"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato44[date("Y-m-d", $j)]["usuariosDl"])
                        {
                            $usuariosDl = $arrayDato44[date("Y-m-d",$j)]["usuariosDl"];
                        }
                        else
                        {
                            $usuariosDl=0;
                        }
                        if($arrayDato45[date("Y-m-d", $j)]["usuariosUl"])
                        {
                            $usuariosUl = $arrayDato45[date("Y-m-d",$j)]["usuariosUl"];
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
          var chart8 = new google.visualization.LineChart(document.getElementById('chart_complemento14'));
                    chart8.draw(data8, options);

          }
                
// DENIED, DROP VOICE COMPLEMENTO1
          function drawChart21() {
              var data9 = google.visualization.arrayToDataTable([
                ["Dia", "Denied Call", "Drop Call"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato46[date("Y-m-d", $j)]["deniedCall"])
                        {
                            $deniedCall = $arrayDato46[date("Y-m-d",$j)]["deniedCall"];
                        }
                        else
                        {
                            $deniedCall=0;
                        }
                        if($arrayDato47[date("Y-m-d", $j)]["dropCall"])
                        {
                            $dropCall = $arrayDato47[date("Y-m-d",$j)]["dropCall"];
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
          var chart9 = new google.visualization.LineChart(document.getElementById('chart_complemento15'));
                    chart9.draw(data9, options);

          }

    
//Crear la tabla de datos grafica 4 POWER COMPLEMENTO1
          function drawChart22() {
              var data4 = google.visualization.arrayToDataTable([
                ["Dia", "Max Power", "Avg Power"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato48[date("Y-m-d", $j)]["maxPower"])
                        {
                            $maxPower = $arrayDato48[date("Y-m-d",$j)]["maxPower"];
                        }
                        else
                        {
                            $maxPower=0;
                        }
                        if($arrayDato49[date("Y-m-d", $j)]["avgPower"])
                        {
                            $avgPower = $arrayDato49[date("Y-m-d",$j)]["avgPower"];
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
          var chart10 = new google.visualization.LineChart(document.getElementById('chart_complemento16'));
                    chart10.draw(data4, options);

          }
                
                
//Crear la tabla de datos grafica 5 RTWP y NOISE COMPLEMENTO1
          function drawChart23() {
              var data5 = google.visualization.arrayToDataTable([
                ["Dia", "Carga UL RTWP", "Noise Floor"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato50[date("Y-m-d", $j)]["rtwp"])
                        {
                            $rtwp = $arrayDato50[date("Y-m-d",$j)]["rtwp"];
                        }
                        else
                        {
                            $rtwp=0;
                        }
                        if($arrayDato51[date("Y-m-d", $j)]["noise"])
                        {
                            $noise = $arrayDato51[date("Y-m-d",$j)]["noise"];
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
          var chart11 = new google.visualization.LineChart(document.getElementById('chart_complemento17'));
                    chart11.draw(data5, options);

          }
           
                
//Crear la tabla de datos grafica 6 CS traffic COMPLEMENTO1
          function drawChart24() {
              var data6 = google.visualization.arrayToDataTable([
                ["Dia", "CS Traffic"],
                  <?php
                    for($j=$fechaInicio; $j<=$fechaFin; $j+=86400)
                    {
                        if($arrayDato52[date("Y-m-d", $j)]["traffic"])
                        {
                            $traffic = $arrayDato52[date("Y-m-d",$j)]["traffic"];
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
          var chart6 = new google.visualization.LineChart(document.getElementById('chart_complemento18'));
                    chart6.draw(data6, options);

          }
    </script>