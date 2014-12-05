<?php 
	$token = '';
	if(isset($_COOKIE['token']) && !empty($_COOKIE['token'])) {
		include_once "connectionbdd.php";
		$token = $_COOKIE['token']; # Récupération des Cookies & Ou Sessions
		$login_q = $pdo->prepare("SELECT * FROM admin WHERE jeton = :token");
		$login_q->execute(array(
			'token' => $token
		));
		
		$user = $login_q->fetch(PDO::FETCH_OBJ);
		
		if(!$user){
			header('Location: index.php'); # Redirection
			exit();
		}else{
			include("menu-admin.php");
		}
	} else {
		header('Location: index.php'); # Redirection
		exit();	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<link rel="stylesheet" href="tinyeditor.css">
	<script src="tiny.editor.js"></script>
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<title>#TIM Matane - Administration Actualités</title>
</head>
<body>
<div class="right">
<section>
