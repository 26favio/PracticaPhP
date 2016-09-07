<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Tabla de Ajedrez</title>
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
		<td colspan="17"><h1>Una Tabla de Ajedrez</h1></th>
	</tr>
	<tr>
		<td></td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
		<td>10</td>
		<td>11</td>
		<td>12</td>
		<td>13</td>
		<td>14</td>
		<td>15</td>
	</tr>
	<?php
        $numero=1;
		$contador = 2;
		$a = 2;
		for ($i=1; $i<17 ; $i++) { 
			echo "<tr width='10%'>";
			echo "<td >" .$i. "</td>";
				for ($j=1; $j < 16; $j++) { 
					if (($a%$contador)==0) {
						echo "<td bgcolor='Black'>" .$numero. "</td>";
					}
					else{
						echo "<td bgcolor='white'>" .$numero. "</td>";
						$contador=$contador+2;
					}$a++;
					$numero++;
					
				}
				
		}
	?>

	</table>
</div>
</body>
</html>