<h1>Novo usuario</h1>
	<form action="?page=save" method="POST">
		<input type="hidden" name="action" value="register">
		<div class="mb-3">
			<label for="nome"/>Nome
			<input type="text" name="nome" id="nome" class="form-control">
		</div>

		<div class="mb-3">
			<label for="nascimento"/>Nascimento
			<input type="date" name="nascimento" id="nascimento" class="form-control">
		</div>

		<div class="mb-3">
			<label for="sexo"/>Sexo
			<input type="text" name="sexo" id="sexo" class="form-control">
		</div>

		<div class="mb-3">
			<label for="cpf"/>cpf
			<input type="text" name="cpf" id="cpf" class="form-control">
		</div>

		<div class="mb-3">
			<label for="rg"/>rg
			<input type="text" name="rg" id="rg" class="form-control">
		</div>

		<div class="mb-3">
			<label for="email"/>E-mail
			<input type="email" name="email" id="email" class="form-control">
		</div>

		<div class="mb-3">
			<label for="telefone"/>Telefone
			<input type="text" name="telefone" id="telefone" class="form-control">
		</div>

		<div class="mb-3">
			<label for="celular"/>Celular
			<input type="text" name="celular" id="celular" class="form-control">
		</div>

		<div class="mb-3">
			<button type="submit" class="btn btn-dark">Enviar</button>
		</div>
	</form>
