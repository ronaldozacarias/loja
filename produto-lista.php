<?php require_once 'cabecalho.php'; ?>
<?php require_once 'conecta.php' ?>
<?php require_once 'banco-produto.php' ?>
<?php
$produtos = listaProdutos($conexao);
?>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Preço</th>
			<th>Descrição</th>
			<th>Categoria</th>
			<th>Usado?</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<?php foreach($produtos as $produto) : ?>	
	<tr>
		<td><?= $produto['nome'] ?></td>
		<td><?= $produto['preco'] ?></td>
		<td><?= substr($produto['descricao'],0, 40) ?></td>
		<td><?= $produto['categoria_nome'] ?></td>
		<td><?=$produto['usado'] == 0 ? "N" : "S" ?></td>

		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto['id']?>">
				<button class="btn btn-danger">remover</button>
			</form>
		</td>
	</tr>
	<?php endforeach ?>

	<?php if (array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
		<p class="alert-success">Produto apagado com sucesso.</p>
	<?php } ?>

</table>
<?php require_once 'rodape.php' ?>

	