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
    #cuerpo2{
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
    #cuerpo3{
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
				<td colspan="10"><h1>Alternando Colores Forma 1</h1></th>
			</tr>
			<tr>

			<?php
				define(dato1, Amarillo);
				define(dato2, Blanco);
				$a = 2;
				for ($i=1; $i<11 ; $i++) { 
						echo "<tr bgcolor='black'>" ;	
						for ($j=1; $j < 11; $j++) { 
							if (($a%2)==0) {
								echo "<td bgcolor='yellow'>" .dato1. "</td>";
							}
							else{
								echo "<td bgcolor='white'>" .dato2. "</td>";
							}
						}
						$a++;
				}
			?>
			</tr>
		</table>
	</div>

	<div id="cuerpo2">
		<table width="1000" border="1">
			<tr>
				<td colspan="10"><h1>Una Tabla 10</h1></th>
			</tr>
			<tr>
				<td colspan="10"><h1>Alternando Colores Forma 2</h1></th>
			</tr>
			<tr>

			<?php
				define(dato1, Amarillo);
				define(dato2, Blanco);
				$contador = 2;
				$a = 2;
				for ($i=1; $i<11 ; $i++) { 
						echo "<tr bgcolor='black'>" ;	
						for ($j=1; $j < 11; $j++) { 
							if (($a%$contador)==0) {
								echo "<td bgcolor='yellow'>" .dato1. "</td>";
							}
							else{
								echo "<td bgcolor='white'>" .dato2. "</td>";
								$contador=$contador+2;
							}$a++;
						}
				}
			?>
			</tr>
		</table>
	</div>

	<div id="cuerpo3">
		<table width="1000" border="1">
			<tr>
				<td colspan="10"><h1>Una Tabla 10</h1></th>
			</tr>
			<tr>
				<td colspan="10"><h1>Alternando Colores Forma 3</h1></th>
			</tr>
			<tr>

			<?php
				define(dato1, Amarillo);
				define(dato2, Blanco);
				$contador = 2;
				$a = 2;
				for ($i=1; $i<11 ; $i++) { 
						echo "<tr bgcolor='black'>" ;	
						for ($j=1; $j < 10; $j++) { 
							if (($a%$contador)==0) {
								echo "<td bgcolor='yellow'>" .dato1. "</td>";
							}
							else{
								echo "<td bgcolor='white'>" .dato2. "</td>";
								$contador=$contador+2;
							}$a++;
						}
				}
			?>
			</tr>
		</table>
	</div>
</body>
</html>