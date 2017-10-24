<html>
<head>
	<title>Ejercicio 5</title>
	<meta charset="utf-8"/>
	<link href="CSS/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla cual es el mayor de tres numeros</h4>
<?php
$n1=54;
$n2=10;
$n3=36;
	
		if(isset($_POST["num1"])){
			$n1=$_POST["num1"];
			$n2=$_POST["num2"];
			$n3=$_POST["num3"];
		}
	
	if ($n1>$n2){
		
		if($n1>$n3){
			echo "El primer número (".$n1.") es mayor que  (".$n2.") y (".$n3.")";
		
		}else{
			echo "El tercer número (".$n3.") es mayor que  (".$n1.") y (".$n2.")";	
		}
	}
	else{
		if($n2>$n3){
			echo "El segundo número (".$n2.") es mayor que  (".$n1.") y (".$n3.")";
		}
		else{
			echo "El tercer número (".$n3.") es mayor que  (".$n1.") y (".$n2.")";
		}
	}
	?>
<P>Nombre del Alumno: Mariana Paola Gonzalez Soria</P>
<a href="index.php">Regresar a menu</a>
</body>
</html>