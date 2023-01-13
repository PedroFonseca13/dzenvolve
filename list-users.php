<h1>Listar Usuários</h1>
	<?php
		$sql = "SELECT *, DATE_SUB(CURDATE(), INTERVAL 20 YEAR) AS new_date FROM pessoas
		WHERE sexo = 'Feminino' ORDER BY nascimento DESC";

		$res = $conn -> query($sql);

		$qtd = $res -> num_rows;

		if($qtd > 0) {
			print "<table class='table table-over'>";
				print "<tr>";
				print "<th>#</th>";
				print "<th>Nome</th>";
				print "<th>Sexo</th>";
				print "<th>CPF</th>";
				print "<th>Data de nascimento</th>";
				print "<th>E-mail</th>";
				print "<th>celular</th>";
				print "<th>Profissão</th>";
				print "<th>Ações</th>";
				print "</tr>";
			while($row = $res -> fetch_object()) {
				print "<tr>";
				print "<td>".$row->id."</td>";
				print "<td>".$row->nome."</td>";
				print "<td>".$row->sexo."</td>";
				print "<td>".$row->cpf."</td>";
				print "<td>".$row->nascimento."</td>";
				print "<td>".$row->email."</td>";
				print "<td>".$row->celular."</td>";
				print "<td>".$row->profissao_id."</td>";
				print "<td>
								<button
									onclick=\"location.href='?page=edit&id=".$row->id."';\" class='btn btn-primary'>Editar
								</button>
								<button
									onclick=\"if(confirm('Are you sure you want to delete this file?)){
										location.href='?page=save&action=delete&id=".$row->id."'}else{false}
										\"
									class='btn btn-danger'>Excluir
								</button>
							</td>";

				print "</tr>";
			}
			print "</table>";

		} else {
			print "<p class='alert alert-info'>Não encontrou resultados!</p>";
		}
	?>

