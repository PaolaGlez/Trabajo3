<html>
<head>
	<title>Ejercicio 2</title>
	<meta charset="utf-8"/>
	<link href="CSS/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PROGRAMACION DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4>
<div>
<?php
 echo "<center><table border=1><center";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
echo "<tr>";
for ($n2=1; $n2<=10; $n2++)
{
echo "<td>", $n, "</td>";
$n=$n+1;
}
echo "</tr>";
}
echo "</table>";
?>
</div>
<P>Nombre del Alumno: Mariana Paola Gonzalez Soria</P>
<a href="index.php">Regresar a menu</a>
</body>
</html>