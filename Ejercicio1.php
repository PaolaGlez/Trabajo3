<html>
<head>
	<title>Ejercicio 1</title>
	<meta charset="utf-8"/>
	<link href="CSS/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4> Hacer un programa que sume, reste, multiplique y divida dos variables.</h4>
<?php
	$numero1=10;
	$numero2=12;
	//SUMAR
	$suma=$numero1+$numero2;
	echo "$numero1 + $numero2"."<br>";
	echo "Suma = ".$suma. "<br>";
	//RESTAR
	$suma=$numero1-$numero2;
	echo "$numero1 - $numero2"."<br>";
	echo "Resta= ".$suma."<br>";
	//MULTIPLICAR
	$suma=$numero1*$numero2;
	echo "$numero1 * $numero2"."<br>";
	echo "Multiplicacion = ". $suma. "<br>";
	//DIVDIR
	if ($numero2!=0) {
			$suma = $numero1 / $numero2;
			echo "$numero1 / $numero2"."<br>";
			echo "División = ". $suma. "<br>";
		}
		  else{
			  echo "$numero1 / $numero2"."<br>";
			  echo "No se puede dividir entre 0";}
?>
<P>Nombre del Alumno: Mariana Paola Gonzalez Soria</P>
<a href="index.php">Regresar a menu</a>
</body>
</html>
