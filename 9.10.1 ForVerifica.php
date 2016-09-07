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
            font-size: 250%;
            font-family: "georgia", serif;
            font-weight: normal;
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
<h1>DATOS RECIBIDOS </h1>
<?php

$usuario=Favio;
$pass=12345;

$u=$_POST['Usuario_'];// RECURERA DATOS DEL FORMULARIO
$p=$_POST['Pasword_'];// RECURERA DATOS DEL FORMULARIO

    

// CUENTA EL NUMERO DE FILAS Q HAY, SI HAY UNA FILA QUIERE DECIR Q EL USUARIO SE ENCUENTRA EN LA BASE DE DATOS
// Y SI NO QUIERE DECIR QUE NO HAY NINGUN USUARIO 

if($usuario == $u && $pass == $p)

  {
    
        
      header("location:9.10.2 ForBien.php");//direcciona a pagina de bienvenida.php
      exit;
        


  
  }
  else
  {
    
      header("location:9.10.2 ForBien.php"); //vuenve a la pagina de logueo  
      exit;
    }
?>

</div>

</div>
</body>
</html>