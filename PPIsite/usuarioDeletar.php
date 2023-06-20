<?php
	include_once "BancoDeDados";
	include_once "usuario.php";

		deletarUsuarios($_GET['id']);
		$usuario = $_SESSION['usuarioAtual'];
		if($usuario->getId() == $_GET['id']){
			header('Location: logoff.php');
		}else{
			header('Location: home.php?p=');
		}
	
?>