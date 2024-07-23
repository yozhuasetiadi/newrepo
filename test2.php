<?php
class Test {
	public $property;
}

$obj = new Test();
$obj -> property = "Halo Gaulin";

// Menggunakan operator nullsafe
$value = $obj?->property; //jika $obj tidak null maka $value akan jadi "Halo Gaulin
echo $value;

$obj = null;

//menggunakan operator nullsafe
$value = $obj?->property; //jika $obj null makan $value akan tetap null
echo $value; //tidak ada output karena $value adalah null

?>
