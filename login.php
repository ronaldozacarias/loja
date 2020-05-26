<?php
require_once 'conecta.php';
require_once 'banco-usuario.php';
require_once 'logica-usuario.php';

session_start();

$usuario = buscaUsuario($conexao, $_POST["login"], $_POST["senha"]);

if($usuario == null) {
	header("Location: index.php?login=0"); // 0 para falso
} else {
	logaUsuario($usuario["login"]);
	header("Location: index.php?login=1"); // 1 para verdadeiro
}
die();


