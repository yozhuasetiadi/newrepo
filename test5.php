<?php
function createUser($name, $email, $role){
	//logic pembuatan pengguna
	return "User created with name: $name, Email: $email, Role: $role";
	}

//menggunakan named argument
echo createUser(name:'Gaulin', email: 'gaulin@kemenperin.go.id', role: 'admin');

?>
