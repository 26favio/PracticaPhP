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
		background: #f2f9f6 repeat-x;
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
        width: 100px;
        margin: 40px auto 0 auto;
    }
     </style>
</head>
<body>
<div id="Cuerpo">
<center>
    <h1>Array sin Foreach</h1>
	<?php
	$array = array("uno", "dos", "tres","cuatro","Cinco");
	reset($array);
	while (list($clave, $valor) = each($array)) {
	    echo "Clave: $clave; Valor: $valor<br />\n";
	}
	// forma de la siguiente manera para mostrar los valores con foreach
	echo "<h2>Forma Con Foreach</h2>";
	foreach ($array as $clave => $valor) {
	    echo "Clave: $clave; Valor: $valor<br />\n";
	}
	?></center>
</div>
</body>
</html>