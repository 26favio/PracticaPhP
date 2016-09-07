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
        width: 800px;
        margin: 40px auto 0 auto;
    }
    #cuerpo #parte1{
        width: 800px;
        margin: 40px auto 0 auto;
    }
    #cuerpo #parte1 #col1{
        width: 350px;
        margin: 5px;
        float: left;
    }
    #cuerpo #parte1 #col2{
        width: 350px;
        margin: 5px;
        float: left;
    }
    #cuerpo #parte2{
        width: 800px;
        margin: 40px auto 0 auto;
    }
    #cuerpo #parte2 #col3{
        width: 350px;
        float: left;
        margin: 5px;
    }
    #cuerpo #parte2 #col4{
        width: 350px;
        float: left;
        margin: 5px;
    }
    #cuerpo #parte3{
        width: 800px;
        margin: 40px auto 0 auto;
    }
    #cuerpo #parte3 #col5{
        width: 350px;
        float: left;
        margin: 5px;
    }
    #cuerpo #parte3 #col6{
        width: 350px;
        float: left;
        margin: 5px;
    }
    
     </style>
</head>
<body>
<div id="Cuerpo">
<center>

<?php
  $eq1=$_POST['eq1'];
  $eq2=$_POST['eq2'];
  $eq3=$_POST['eq3'];
  $eq4=$_POST['eq4'];
  $eq5=$_POST['eq5'];
  $eq6=$_POST['eq6'];

$entrada = array("$eq1", "$eq2", "$eq3", "$eq4", "$eq5", "$eq6");

?>
<h1>Fichure De Partidos</h1>
<form action="9.11 Fichure.php">
<div id="cuerpo">
	<div id="parte1">
		<div id="col1">
			<table width="200" border="2">
			    <tr>
			       <td><?php echo "$eq1" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq2";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq1" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq3";?></td>
			    </tr>
			    <tr>
			    	<td><?php echo "$eq1" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq4";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq1" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq5";?></td> 
			    </tr>
			    <tr>
			       <td><?php echo "$eq1" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq6";?></td>
			    </tr>
		    </table>
		</div>
		<div id ="col2">
			<table width="200" border="2">
			    <tr>
			       <td><?php echo "$eq2" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq1";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq2" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq3";?></td>
			    </tr>
			    <tr>
			    	<td><?php echo "$eq2" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq4";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq2" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq5";?></td> 
			    </tr>
			    <tr>
			       <td><?php echo "$eq2" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq6";?></td>
			    </tr>
		    </table>
		</div>
	</div>

	<div id="parte2">
		<div id="col3">
			<table width="200" border="2">
			    <tr>
			       <td><?php echo "$eq3" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq2";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq3" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq1";?></td>
			    </tr>
			    <tr>
			    	<td><?php echo "$eq3" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq4";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq3" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq5";?></td> 
			    </tr>
			    <tr>
			       <td><?php echo "$eq3" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq6";?></td>
			    </tr>
		    </table>
		</div>
		<div id="col4">
			<table width="200" border="2">
			    <tr>
			       <td><?php echo "$eq4" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq2";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq4" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq3";?></td>
			    </tr>
			    <tr>
			    	<td><?php echo "$eq4" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq1";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq4" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq5";?></td> 
			    </tr>
			    <tr>
			       <td><?php echo "$eq4" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq6";?></td>
			    </tr>
		    </table>
		</div>
	</div>
	<div id="parte3">
		<div id="col5">
			<table width="200" border="2">
			    <tr>
			       <td><?php echo "$eq5" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq2";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq5" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq3";?></td>
			    </tr>
			    <tr>
			    	<td><?php echo "$eq5" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq4";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq5" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq1";?></td> 
			    </tr>
			    <tr>
			       <td><?php echo "$eq5" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq6";?></td>
			    </tr>
		    </table>
		</div>

		<div id="col6">
			<table width="200" border="2">
			    <tr>
			       <td><?php echo "$eq6" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq2";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq6" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq3";?></td>
			    </tr>
			    <tr>
			    	<td><?php echo "$eq6" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq4";?></td>
			    </tr>
			    <tr>
			       <td><?php echo "$eq6" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq1";?></td> 
			    </tr>
			    <tr>
			       <td><?php echo "$eq6" ?></td> 
			       <td><?php echo "VS" ?></td> 
			       <td><?php echo "$eq1";?></td>
			    </tr>
		    </table>
		</div>
	</div>
    
</div>  
<h2><input type="submit" value="Atras"></h2>
</form>
</center>
</div>
</body>
</html>