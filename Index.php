<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Presentacion</title>
    <link rel="stylesheet"  href="estilos.css">
    <meta name="descripcion" content="Mi Block"/>
    <meta name="keywords" content="Mi, Block"/>

    <link rel="index"  href="/" title="Inicio">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: #f6ffff url("Imgs/fondo.gif") 0 0 repeat-x;
            font: 100%/160% "verdena", sans-serif;
            color: #4F6AD7;
        }
        a{
            color: #192666;
        }
        p{
            margin: 1px;
            padding: 1px;
        }
        .clear{
            clear: both;
        }
        h1, h2, h3, h4, h5{
            margin: 1em 0;
            padding: 0;
        }
        h1{
            font-size: 260%;
            font-family: "georgia", serif;
            font-weight: normal;
        }
        h2{
            font-size: 180%;
            font-family: "georgia", serif;
            font-weight: normal;
        }
        h3{
            font-size: 70%;

        }
        ul, ol{
            margin: 1em 0 1em 2em;
            padding: 0;
        }
        p{
            text-align: center;
        }
        #cuerpo{
            width: 1200px;
            margin: 40px auto 0 auto;
        }
        #cabeza{
            text-align: center;
        }

        
        #cuerpo #menu{
            float: left;
            width: 400px;
            margin: 1em 0;
            padding: 0 0 0 2;
            background: #f6f6f6;
        }
        #cuerpo #parte2{
            float: left;
            width: 600px;
            margin: 1em 0;
            padding: 0 0 0 2;
            background: #f6f6f6;
            text-align: center;
        }
        #cuerpo #parte2 img{
            border: 2px solid #ddd;
            margin: 10px 10px;
            width: 330px;
            height: 330px;
            text-align: center;
        }
        #cuerpo #parte3 h3{
            float: left;
            width: 200px;
            margin: 1em 0;
            padding: 0 0 0 2;
            background: #f6f6f6;
            text-align: center;
        }
        #cuerpo #parte3 img{
            float: left;
            border: 2px solid #ddd;
            padding: 5px;
            margin: 10px 10px;
            width: 150px;
            height: 150px;
        }
         #cuerpo #parte3 table{
            float: left;
            border: 2px solid #ddd;
            padding: 5px;
            margin: 10px 10px;
            width: 150px;
            height: 150px;
        }

    </style>
</head>
<body>

<div id="cuerpo">

	<div id="cabeza">
		<h1>Entrega de Practica </h1>
	</div>

	<div id="cuerpo">
        <div id="menu">
            <ul>
                <li><a href="1 Tabla.php">Tablas</a></li>
                <li><a href="2 Tabla2.php">Tabla con Diseño</a></li>
                <li><a href="3 Ajedrez.php">Tablero de Ajedrez</a></li>
                <li><a href="4 Ajedrez2.php">Tablero de Ajedrez con Datos</a></li>
                <li><a href="5 Directorios.php">Directorio con Imagenes</a></li>
                <li><a href="6 ArregloAsociativo.php">Formas con Forach</a></li>
                <li><a href="7 Define.php">Mayor de 3 Numeros</a></li>
                <li><a href="8 Fechas.php">Fechas</a></li>
                <li><a href="9 Formulario.php">Formulario con Datos</a></li>
                <li><a href="9.10 FormularioIden.php">Vereficar Usuario</a></li>
                <li><a href="9.11 Fichure.php">Fichure de Jugadores</a></li>
                <li><a href="9.12 Dados.php">Lanzar dos Dados</a></li>
                <li><a href="9.12.1 DadosLanzar.php">Lanzar Sinco Dados</a></li>
            </ul>
        </div>
        <div id="parte2">
            <img src="Imgs/img.png">
        </div>
        <div id="parte3">
            <img src="Imgs/Mifot.jpg" alt="Mi Foto"/></br>
            <table width="200">
                <tr>
                    <td><h3>Nombre:</h3></td>
                    <td><h3>Favio Ronaldo Pairo Alvarez</h3></td>
                </tr>
                <tr>    
                    <td><h3>Carrera: </h3></td>
                    <td><h3>Ingenieria de Sistemas</h3></td>
                </tr>
                <tr>
                    <td><h3>Materia: </h3></td>
                    <td><h3>Emergentes 1</h3></td>
                </tr>
                <tr>
                    <td><h3>Fecha de Entrega: </h3></td>
                    <td><h3>07/09/2016</h3></td>
                </tr>
            
            </table>
        </div>
    </div>
    

</div>

</body>
</html>