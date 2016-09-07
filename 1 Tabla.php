<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Tabla</title>
	<link rel="stylesheet"  href="estilos.css">
	<meta name="descripcion" content="Mi Maketacion Block"/>
	<meta name="keywords" content="Maketacion, Block"/>
	<link rel="index"  href="/" title="Inicio">
	<link rel="stylesheet" type="text/css" href="estilos.css">

	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background: #f2f5fe 0 0 repeat-x;
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
	#cuerpo{
        width: 1000px;
        margin: 40px auto 0 auto;
    }
    #cuerpo #table{
            background: #f2fefe;
    }
    td{

        
        width: 5px;
        padding: 5px;
        text-align: center;
        font-size: 180%;
    }
	</style>
</head>
<body>
	<div id="cuerpo">
		<table width="1000" border="1">
			<tr>
				<td colspan="10"><h1>Una Tabla 10</h1></th>
			</tr>
			<tr>

			<?php
				$numero = 1;
				for ($i=1; $i<11 ; $i++) { 
						echo "<tr bgcolor='white'>" ;	
						for ($j=1; $j < 11; $j++) { 
							echo "<td bgcolor='white'>" .$numero. "</td>";
							$numero++;
						}
				}
			?>
			</tr>
		</table>
	</div>
</body>
</html>