<?php require_once 'cabecalho.php' ?>
<?php require_once 'conecta.php' ?>
<?php require_once 'logica-usuario.php' ?>
<?php require_once 'banco-produto.php';
session_start(); 
 ?>
 <?php verificaUsuario(); ?>


<?php
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
$usado = $_POST['usado'];
?>

<?php
if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}
?>

<?php
if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) {
?>
<p class="text-success">Produto<?= $nome ?>, adicionado com sucesso!</p>
<?php
} else {
	$msg = mysqli_error($conexao);

?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?=$msg ?></p>
<?php
}
?>


<?php require_once("rodape.php") ?>


