<?php
require_once 'cabecalho.php';
require_once 'conecta.php';
require_once 'banco-categoria.php';

session_start();
if(!isset($_SESSION["usuario_logado"])) {
	Header("Location: index.php?falhaDeSeguranca=true");
	die();
}

$categorias = listaCategorias($conexao);
?>

				<h1>Formulário cadastro de produto</h1>
				<form action="adiciona-produto.php" method="post">
					<div class="form-group">
						<label>Nome:</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="form-group">
						<label>Preço:</label>
						<input type="number" name="preco" class="form-control">
					</div>
					<div class="form-group">
						<label>Descrição:</label>
						<textarea name="descricao" class="form-control"></textarea>						
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" name="usado" value="true"> Usado
						</label>
					</div>

					<div class="form-group">
						<label>Categoria:</label>
							<select name="categoria_id" class="form-control">
								<?php foreach($categorias as $categoria) : ?>
									<option value="<?=$categoria['id']?>">
										<?=$categoria['nome']?>
									</option>
								<?php endforeach ?>
							</select>
					</div>
				

					<input type="submit" value="Cadastrar" class="btn btn-primary">
				</form>
<?php require_once ("rodape.php") ?>