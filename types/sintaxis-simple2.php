<?php 

	$jugos = array("manzana", "naranja", "koolaid1" => "purpura");

	echo "Él tomó algo de jugo de $jugos[0].".PHP_EOL;
	echo "Él tomó algo de jugo de $jugos[1].".PHP_EOL;
	echo "Él tomó algo de jugo $jugos[koolaid1].".PHP_EOL;

	class gente {
		public $john = "john smith";
		public $jane = "jane smith";
		public $robert = "robert paulsen";

		public $smith = "smith";
	}

	$gente = new gente();

	echo "$gente->john tomó algo de jugo de $jugos[0].".PHP_EOL;
	echo "$gente->john entonces dijo hola a $gente->jane.".PHP_EOL;
	echo "La esposa de $gente->john saludó a $gente->robert.".PHP_EOL;
	// echo "$gente->robert saludó a los dos $gente->smiths."; // No funcionará

?>