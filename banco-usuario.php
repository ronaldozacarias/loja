<?php
require_once 'conecta.php';
function buscaUsuario($conexao, $login, $senha)
{
	$senhaMd5 = md5($senha);
	$login = mysqli_real_escape_string($conexao, $login);
	$query = "select * from usuarios where login='{$login}'
	and senha='{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}