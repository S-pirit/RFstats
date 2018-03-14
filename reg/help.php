<!DOCTYPE html>
<?php
$file="../ARCHIVOS/Manual.docx";

    if(isset($_POST['manual']))
    {
        if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
}
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        @font-face{
	font-family:light;
	src:url("../fonts/light.ttf");
}
        body{
            color:white;
            background:#d1100c;
            font-family:light;
            font-size:30px;
            padding-top:120px;
        }
        #manual{
            border:none;
            background-image:url("../images/manual.png");
            background-size: cover;
            width:200px;
            height:200px;
            margin:auto;
            transition-duration: .4s;
            cursor:pointer;
        }
        #container{
            display:flex;
            margin:auto;
            justify-content: center;
        }
        #container button:hover{
            cursor:pointer;
            transform:translateY(-20px);
        }
        footer{
            position:absolute;
            display: flex;
            bottom:0;
            color:white;
            font-size:15px;
            justify-content: center;
            width:99.4%;
        }
        #close{
            font-size:20px;
            margin:20px;
            border:5px solid white;
            border-radius:10px;
            background-color:transparent;
            color:white;
            cursor:pointer;
            width:100px;
            height:50px;
            box-sizing: border-box;
        }
        #close:hover{
            color:transparent;
            transition-duration:.4s;
            width:50px;
            height:50px;
            border-radius:100%;
            background:white;
            background-image: url("../images/close.svg");
            background-size: contain;
        }
        #app{
            background-image:url("../images/android.png");
            background-size:cover;
            width:200px;
            height:200px;
            border:none;
            transition-duration: .4s;
        }
        form{
            margin:10px 0px 0px 30px;
        }
    </style>
    <title>
    Ayuda
    </title>
</head>
     <footer>
        <center><p>Comcel S.A. © 2018</p></center>
    </footer>
<body>
    <center>
    <div id="container">
        <form action="downloadApp.php" method="post">
            <button id="app" type="submit"></button>
            <p>Descarga la app</p>
        </form>
        <form action="help.php" method="post">
            <button id="manual" type="submit" name="manual"></button>
            <p>Descarga el manual</p>
        </form>
        
    </div>
    <button id="close" onclick="window.close()">Cerrar</button>
    </center>
</body>
</html>