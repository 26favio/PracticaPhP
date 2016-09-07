<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Directorios</title>
    <link rel="stylesheet"  href="estilos.css">
    <meta name="descripcion" content="Mi Maketacion Block"/>
    <meta name="keywords" content="Maketacion, Block"/>
    <link rel="index"  href="/" title="Inicio">
    <link rel="stylesheet" type="text/css" href="estilos.css">

    <style type="text/css">
    body{
        margin: 0;
        padding: 0;
        background: #f2f5fe repeat-x;
        font: 70%/160% "verdena", sans-serif;
        color: #192666;
    }
    h1, h2, h3, h4, h5{
            margin: 1em 0;
            padding: 0;
        }
        h1{
            font-size: 260%;
            font-family: "georgia", serif;
            font-weight: normal;
            text-align: center;
            color: red;

        }
        h2{
            font-size: 180%;
            font-family: "georgia", serif;
            font-weight: normal;
            text-align: center;
        }
     p{
        font-size: 50%;
        font-family: "georgia", serif;
        font-weight: normal;
        text-align: center;
        color: white;
     }
     #cuerpo{
        width: 300px;
        margin: 40px auto 0 auto;
    }
     </style>
</head>
<body>
<center><h1>
<?php
    $Dia=$_POST["Dia"];
    $Mes=$_POST["Mes"];
    $Año=$_POST["Año"];

    if ($Mes=="01"){
            echo "$Dia de enero $Año";
    }
    if ($Mes=="02"){
            echo "$Dia de febrero $Año";
    }
    if ($Mes=="03"){
            echo "$Dia de marzo $Año";
    }
    if ($Mes=="04"){
            echo "$Dia de abril $Año";
    }
    if ($Mes=="05"){
            echo "$Dia de mayo $Año";
    }
    if ($Mes=="06"){
            echo "$Dia de junio $Año";
    }
    if ($Mes=="07"){
            echo "$Dia de julio $Año";
    }
    if ($Mes=="08"){
            echo "$Dia de agosto $Año";
    }
    if ($Mes=="09"){
            echo "$Dia de septiembre $Año";
    }
    if ($Mes=="10"){
            echo "$Dia de octubre $Año";
    }
    if ($Mes=="11"){
            echo "$Dia de noviembre $Año";
    }
    if ($Mes=="12"){
            echo "$Dia de diciembre $Año";
    }
    "<BR>"
?></h1></center>
<div id="cuerpo">
<h1>Fechas Del Año</h1>
<table border="3">
    <form method="POST" action="8 Fechas.php">
    <tr>   
        <td><h2>Dia :</h2></td>            
        <td><input name="Dia" type="text" id="Dia" value=""/><br></td>
    </tr>
    <tr>   
        <td><h2>Mes :</h2></td>   
        <td><input name="Mes" type="text" id="Mes" value=""/><br></td>
    </tr> 
    <tr>      
        <td><h2>Año :</h2></td> 
        <td><input name="Año" type="text" id="Año" value=""/><br></td>
    </tr>       
    <tr>            
        <td colspan="2"><input name="btnfecha" type="submit" id="btnfecha" value="Ir  a Fecha"/></td>
    </tr>        
    </form>
</table>
</div>
</body>
</html>