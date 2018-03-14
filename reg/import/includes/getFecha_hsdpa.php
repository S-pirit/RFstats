<?php
//Extraer la fecha y cambiar el formato
$csvFile = fopen($nombreArchivo, "r");
fgetcsv($csvFile);
while($line=fgetcsv($csvFile, "r"))
{
    $date1=$line[4];
    break;
}

$date2 = str_split($date1);
for ($j=10; $j<=19; $j++)
{
    unset($date2[$j]);
}
$date3=implode($date2);
$dateObject = DateTime::createFromFormat('d/m/Y', $date3);
$dateString =$dateObject->format('Y-m-d');

if ($dateString=="")
{
    die("Formato de fecha invalido");
}
echo $dateString;
fclose($csvFile);
?>