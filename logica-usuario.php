<?php
session_start();


function usuarioEstaLogado()
{
	return isset($_SESSION["usuario_logado"]);
}

function logout()
{
	session_destroy();
}

function usuarioLogado()
{
	return $_SESSION["usuario_logado"];
}

function logaUsuario($login)
{
	$_SESSION["usuario_logado"] = $login;
}

function verificaUsuario() 
{
	if(!usuarioEstaLogado()) {
		header("Location: index.php?falhaDeSeguranca=true");
		die();
	}
}

?>
