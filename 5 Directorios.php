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
     img{
        border: 2px solid #ddd;
        padding: 5px;
        margin: 10px 10px;
        width: 200px;
        padding: 10px
    }
	#cuerpo{
        width: 1200px;
        margin: 40px auto 0 auto;
    }
    
	</style>
</head>
<body>
	<h1>Directorios con Imagenes</h1>
    <div id="cuerpo"><center>
            <?php

            if ($gestor = opendir('ImgDir'))    
            {
             echo "<table border=3>";
             echo "<tr>";
             $i=0;

             while (false !== ($archivo = readdir($gestor))) 
             {
                    if ($archivo!="." && $archivo!="..")
                    {

                        if ($i==4){
                             $i=0;
                            echo "</tr>";
                            echo "<tr>";
                        }
                        $i++;
                        echo "<td>";
                        echo "<a href=ImgDir/$archivo><img src=ImgDir/$archivo width='300px'> 
                        </a>";
                    }
             }
             echo "</tr>";
             echo "</table>";
             closedir($gestor);
            }
        ?></center>

    </div>

</body>
</html>