<?php
$status=1;

//menggunakan match expression
$result = match ($status){
	0 => 'zero',
	1 => 'one',

	default => 'unknown',
};
echo $result; //output: one
?>
