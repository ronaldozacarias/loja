<?php 
require_once 'cabecalho.php';
require_once 'logica-usuario.php';
session_start(); 
?>


 <?php
 if(isset($_GET["falhaDeSeguranca"])) {
 	?>
 	<p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
 	<?php
 }
 ?>

 <?php
 if(isset($_GET["logout"]) && $_GET["logout"]==true) {
 	?>
 	<p class="alert-success">Deslogado com sucesso</p>
 	<?php
 }
 ?>

<h1>Bem vindo!</h1>

<?php
if(usuarioEstaLogado()) {
	?>
	<p class="text-success">Você está logado como <?= usuarioLogado() ?>.<a href="logout.php">Deslogar</a></p>
	<?php
} else {
	?>	
	<h2>Login</h2>
	<form action="login.php" method="post">
		<div class="form-group">
			<label>Login</label>
			<input class="form-control" type="text" name="login">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input class="form-control" type="password" name="senha">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
	</form>
	<?php
}
?>


<?php require_once 'rodape.php'; ?>
