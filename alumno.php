	<?php
	class Alumno
	{

		public $nombre;
		public $apellido;

		public function Mostrar()
		{
			echo $this->nombre;
			echo $this->apellido;
		}

		public static function MostrarAlumno($unAlumno)
		{
			$unAlumno->Mostrar();
		}
	}
	?>