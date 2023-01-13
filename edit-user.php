<h1>Editar usuario</h1>
<?php
	$sql = "SELECT * FROM pessoas WHERE id=".$_REQUEST['id'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
	<form action="?page=edit" method="POST">
		<input type="hidden" name="action" value="edit">
		<input type="hidden" name="id" value="<?php print $row->id; ?>" />
			<div class="mb-3">
			<label for="nome"/>Nome
			<input
				type="text"
				name="nome"
				id="nome"
				value="<?php print $row->nome; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="nascimento"/>Nascimento
			<input
				type="date"
				name="nascimento"
				id="nascimento"
				value="<?php print $row->nascimento; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="sexo"/>Sexo
			<input
				type="text"
				name="sexo"
				id="sexo"
				value="<?php print $row->sexo; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="cpf"/>cpf
			<input type="text" name="cpf" id="cpf"
				value="<?php print $row->cpf; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="rg"/>rg
			<input type="text" name="rg" id="rg"
				value="<?php print $row->rg; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="email"/>E-mail
			<input type="email" name="email" id="email"
				value="<?php print $row->email; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="telefone"/>Telefone
			<input type="text" name="telefone" id="telefone"
				value="<?php print $row->telefone; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<label for="celular"/>Celular
			<input type="text" name="celular" id="celular"
				value="<?php print $row->celular; ?>"
				class="form-control"
			>
		</div>

		<div class="mb-3">
			<button type="submit" class="btn btn-dark">Salvar</button>
		</div>
	</form>
