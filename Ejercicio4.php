<html>
<head>
	<title>Ejercicio 4</title>
	<meta charset="utf-8"/>
	<link href="CSS/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla cual es el mayor de dos numeros</h4>
<?php
$n1=54;
$n2=10;

if ($n1>$n2){
echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
}
elseif($n1==$n2){
echo "El primer número (".$n1.") es igual al segundo (".$n2.")";}
else{ 
echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
}
?>
<P>Nombre del Alumno: Mariana Paola Gonzalez Soria</P>
<a href="index.php">Regresar a menu</a>
</body>
</html>