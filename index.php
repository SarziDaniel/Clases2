<html>
<head>
	<title>Clase2 Programacion3</title>
</head>
<body>
	Daniel Sarzi
	<?php
	echo "<h1>Hola mundo</h1>";

	$nombre="Daniel Sarzi";

	echo $nombre;

	echo "<h1> $nombre </h1>";
	echo "<h1>"." $nombre"." </h1>";
	echo '<h1> $nombre </h1>';
	echo '<h1>'." $nombre".' </h1>';
	echo "<h1>".' $nombre'." </h1>";

	echo "<br>---------------<br>";

	$numero=33;
	if($numero<18)
		printf("Es menor de edad");
	else
		printf("Es mayor de edad");
	echo "<br>";
	$numero=17;
	if($numero<18)
		printf("Es menor de edad");
	else
		printf("Es mayor de edad");

	echo "<br>---------------<br>";

	$arrayNuevo=array(1,2,3,5);

	$arrayNuevo[]=66;
	$arrayNuevo[2]=666;

	foreach ($arrayNuevo as $num) {
		echo "<br>$num";
	}

	echo "<br>---------------<br>";

	$arrayProducto=array("Pizza"=>20,"Cerveza"=>34,"Helado"=>75);
	echo $arrayProducto["Pizza"];
	echo $arrayProducto["Empanada"];

	$arrayNuevo["Apellido"]="Sarzi";
	$arrayProducto["2"]="Numero 2";

	var_dump($arrayProducto);
	echo "<br>";
	var_dump($arrayNuevo);



?>
</body>
</html>