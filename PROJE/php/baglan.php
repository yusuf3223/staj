<?php 

try{
	
	$DBConnection = new PDO("mysql:host=localhost;dbname=proje;charset=utf8;",'root','');
	
	
}catch(PDOException $e){
	
	echo $e->getMessage();
}


?>