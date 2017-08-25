<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina PHP</title>
</head>
<body>
<h1>Primera Página en PHP</h1>
<?PHP

$variable1 = 1;
$variable2 = "mensaje";
echo "El valor de la varibale 1 : " . $variable1;
echo "<br>";
echo "<br>";


for ($i=0; $i < 5; $i++) {
	echo "Bienvenido";
	echo "<br>";

}

echo "<br>";
echo "<br>";

for ($i=0; $i <3 ; $i++) { 
	echo $variable2 . " ";
	}
echo "<br>";
echo "<br>";
	echo "Este es el cuerpo de la Página php donde se agrego un bucle for para";
	echo "<br>";
	echo "poder imprimir algunas variables dentro de la página";
?>

</body>
</html>