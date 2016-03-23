<html>
<head>
	<title>Clase2 Programacion3</title>
</head>
<body>
	Daniel Sarzi
	<?php
	require_once "alumno.php"; 

	//INCLUDE Se encarga de pegar el archivo.
	//REQUIRE Se necesita el archivo.
	//INCLUDE_ONCE SOLO TE PERMITE PERGAR EL ARCHIVO 1 VEZ.
	//REQUIRE_ONCE



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

	echo "<br>---------------<br>";

	$miObjeto=new stdclass();
	$miObjeto->nombre="Daniel";
	$miObjeto->apellido= "Sarzi";

	$miObjeto->productos=$arrayProducto;

	var_dump($miObjeto);
	echo "<br>";

	$arrayDeObjetos=array();
	$arrayDeObjetos["Nombre"]="Daniel";
	$arrayDeObjetos["Apellido"]="Sarzi";
	$arrayDeObjetos["ArraydeProductos"]=$arrayProducto;

	var_dump($arrayDeObjetos);

	echo "<br>---------------<br>";
	// class Alumno
	// {

	// 	public $nombre;
	// 	public $apellido;

	// 	public function Mostrar()
	// 	{
	// 		echo $this->nombre;
	// 		echo $this->apellido;
	// 	}

	// 	public static function MostrarAlumno($unAlumno)
	// 	{
	// 		$unAlumno->Mostrar();
	// 	}
	// }

	$nuevoAlumno=new Alumno();
	$nuevoAlumno->nombre="Daniel";
	$nuevoAlumno->apellido="Sarzi";

	$nuevoAlumno->Mostrar();

	echo "<br>";
	Alumno::MostrarAlumno($nuevoAlumno);

	echo "<br>";
	var_dump($nuevoAlumno);

?>
</body>
</html>