<?php
	switch ($_REQUEST["action"]) {
		case 'register':
			$data_nasc = $_POST["nascimento"];
			$sexo = $_POST["sexo"];
			$cpf = $_POST["cpf"];
			$rg = $_POST["rg"];
			$email = $_POST["email"];
			$telefone = $_POST["telefone"];
			$celular = $_POST["celular"];

			$sql = "INSERT INTO pessoas (nome, nascimento, sexo, cpf, rg, email,telefone, celular) VALUES ('{$nome}', '{$data_nasc}', '{$sexo}', '{$cpf}', '{$rg}', '{$email}', '{$telefone}', '{$celular}')";

			$res = $conn -> query($sql);

			if($res==true) {
				print "<script>alert('Success');</script>";
				print "<script>location.href='?page=list'</script>";
			} else {
				print "<script>alert('Error');</script>";
				print "<script>location.href='?page=list';</script>";
			}
			break;

		case 'edit':
			$nome = $_POST["nome"];
			$nascimento = $_POST["nascimento"];
			$sexo = $_POST["sexo"];
			$cpf = $_POST["cpf"];
			$rg = $_POST["rg"];
			$email = $_POST["email"];
			$telefone = $_POST["telefone"];
			$celular = $_POST["celular"];

			$sql = "UPDATE pessoas SET
								nome='{$nome}', nascimento='{$nascimento}', sexo='{$sexo}', cpf='{$cpf}', rg='{$rg}', email='{$email}', telefone='{$telefone}', celular='{$celular}'
							WHERE id=".$_REQUEST["id"];

			$res = $conn -> query($sql);

			if($res==true) {
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=list'</script>";
			} else {
				print "<script>alert('Erro ao editar');</script>";
				print "<script>location.href='?page=list';</script>";
			}
			break;

			case 'delete':
				$sql = "DELETE FROM pessoas WHERE id=".$_REQUEST["id"];

				$res = $conn -> query($sql);

				if($res==true) {
					print "<script>alert('Excluido com sucesso');</script>";
					print "<script>location.href='?page=list'</script>";
				} else {
					print "<script>alert('Erro ao excluir');</script>";
					print "<script>location.href='?page=list';</script>";
				}
				break;

		default:
			# code...
			break;
	}
