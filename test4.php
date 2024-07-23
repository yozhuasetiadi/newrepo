<?php
try{
	//contoh kode yg mungkin menyebabkan eror
	$value = 1 / 0; //ini akan mnyebabkan divisionByZeroEror
}catch (DivisionByZeroErrpr $e) {
	echo "Eror Bagi Nol: {$e->getMessage()}";
}catch(Error $e){
	echo "Error: {$e->getMessage()}";
}
?>
