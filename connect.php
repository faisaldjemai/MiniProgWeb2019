<?php
 	$dsn = 'mysql:host=localhost;dbname=faisaldjemai';

 	$user = 'root';

 	$pass = '';

 	try{

 		$db = new PDO($dsn , $user, $pass);
 		echo 'you are connectd';
 	}
 	catch(PDOException $e){
 		echo 'Failed' . $->getMessage();
 	}