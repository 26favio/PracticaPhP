<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
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
<table border="2">
  <form method="POST" action="9.10.1 ForVerifica.php" method="POST">
    <tr>
        <td colspan="3"><h2>Formulario</h2></td>
    </tr>
    <tr>
        <td align="right">Usuario</td>
        <td align="left"><input type="text" name="Usuario_" id="Favio" value="Favio" ></td>
    </tr>
    <tr>
        <td width="50%" align="right">Contraseña</td>
        <td width="50%" align="left"><input type="text" name="Pasword_" id="12345" value="12345"></td>
    </tr>
    <tr>
      <input type="hidden" name="login">
      <td colspan="3"><input type="submit" name="btncrear" id="btncrear" value="Enviar" /></td>
    </tr>
  </form>
</table>
</div>

</body>
</html>