<?php
	$usager="tim_pefceq314";
	$motdepasse="oLyg5hgOClNa";
	$hote="localhost";
	$base="tim_pefceq314";

	$dsn="mysql:dbname=".$base.";host=".$hote;
	
	try{
		$pdo=new PDO($dsn, $usager, $motdepasse);
	}catch(PDOException $e){
		echo "Connection echouee: ".$e->getMessage();
	}
?>
