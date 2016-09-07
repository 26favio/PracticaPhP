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
        width: 500px;
        margin: 40px auto 0 auto;
    }
     </style>
</head>
<body>
    <div id="cuerpo">
    <table border="2">
        <form action="" method="POST">
        <tr>
            <td colspan="3"><h2>El Mayor de Tres Numeros</h2></td>
        </tr>
        <tr>
            <td align="right">Valor X</td>
            <td align="left"><input type="text" name="valor_x" value= ></td>
        </tr>
        <tr>
            <td width="50%" align="right">Valor Y</td>
            <td width="50%" align="left"><input type="text" name="valor_y" value=></td>
        </tr>
        <tr>
            <td width="50%" align="right">Valor Z</td>
            <td width="50%" align="left"><input type="text" name="valor_z" value=></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="btncrear" id="btncrear" value="CREAR" /></td>
        </tr>

    </table>
    <?php
    $dato1 = $_POST['valor_x'];
    $dato2 = $_POST['valor_y'];
    $dato3 = $_POST['valor_z'];
   if ($dato1 > $dato2) {
       if ($dato1 > $dato3) {
           if ($dato2 > $dato3) {
               echo "<h2> El mayor es: $dato1 valor_x </h2><br />\n";
               echo "<h2> El medio es: $dato2 valor_y </h2><br />\n";
               echo "<h2> El menor es: $dato3 valor_z </h2><br />\n";
           }
           else{
               echo "<h2> El mayor es: $dato1 valor_x </h2><br />\n";
               echo "<h2> El menor es: $dato3 </h2><br />\n";
               echo "<h2> El medio es: $dato2 valor_y </h2><br />\n";
           }
        }
        else{
            echo "<h2> El menor es: $dato3 valor_z </h2><br />\n";
            echo "<h2> El mayor es: $dato1 valor_x </h2><br />\n";
            echo "<h2> El medio es: $dato2 valor_y </h2><br />\n";
        }

   }
   else{
        if ($dato2 > $dato3) {
            if ($dato1 > $dato3) {
                echo "<h2> El mayor es: $dato2 valor_y </h2><br />\n";
                echo "<h2> El medio es: $dato1 valor_x </h2><br />\n";
                echo "<h2> El menor es: $dato3 valor_z </h2><br />\n";
            }
            else{
                echo "<h2> El medio es: $dato2 valor_y </h2><br />\n";
                echo "<h2> El menor es: $dato3 valor_z </h2><br />\n";
                echo "<h2> El mayor es: $dato1 valor_x </h2><br />\n";
            }
        }
        else{
            echo "<h2> El menor es: $dato3 valor_z </h2><br />\n";
            echo "<h2> El medio es: $dato2 valor_y </h2><br />\n";
            echo "<h2> El mayor es: $dato1 valor_x </h2><br />\n";
        }
   }
   
   ?>
    </div>
</body>
</html>