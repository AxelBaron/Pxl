<?php
	$usager="root";
	$motdepasse="root";
	$hote="localhost";
	$base="tim_pefceq314";

	$dsn="mysql:dbname=".$base.";host=".$hote;
	
	try{
		$pdo=new PDO($dsn, $usager, $motdepasse);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Connection echouee: ".$e->getMessage();
	}

?>
