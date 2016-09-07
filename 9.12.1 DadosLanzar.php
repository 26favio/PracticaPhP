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
		background: #f6f6f6 repeat-x;
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
        width: 400px;
        margin: 100px;
        padding: 100px;
        margin: 40px auto 0 auto;
    }
    img{
        width: 200px;
    }
     </style>
</head>
<body>
<div id="Cuerpo">
<center>
<h1>Lanzar 5 Dados al Mismo tiempo</h1>
<form method="post" action="">  
<?php

$total = "6"; 
$extension = ".jpg";
$carpeta = "imgdado";

$start = "1";
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";
?>


<?php
// segundo dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php
// tercer dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php
// cuarto dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>

<?php
// quinto dado
$random = mt_rand($start, $total);
$image_name = $random . $extension;
echo "<img src='$carpeta/$image_name'>";

?>
<input type="submit" value="lanzar dados">

</form> 
</center>
</div>
</body>
</html>