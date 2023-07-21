<?php 
	include_once('conexao.php');

	$recebe_nome = $_POST['txtNome'];
	$recebe_cpf = $_POST['txtCPF'];
	$recebe_nascimento = $_POST['txtDataNascimento'];
	$recebe_email = $_POST['txtEmail'];
	$recebe_telefone = $_POST['txtTelefone'];
	$recebe_endereco = $_POST['txtEndereco'];
	$recebe_numero = $_POST['txtNumero'];
	$recebe_cep = $_POST['txtCEP'];
	$recebe_referencia = $_POST['txtReferencia'];
	$recebe_senha = $_POST['txtSenha'];
	$recebe_confirmasenha = $_POST['txtConfirmacaoSenha'];


	$consulta = $conexao->query("SELECT * from users WHERE txtCPF='$recebe_cpf'");


		if ($consulta->rowCount()==1) {

			header('location:erro1.php');

		} else {

			$incluir=$conexao->query("

				INSERT INTO users (txtNome,txtCPF,txtDataNascimento,txtEmail,txtTelefone,txtEndereco,txtNumero,txtCEP,txtReferencia,txtSenha,txtConfirmacaoSenha,adm)
				VALUES (

				'$recebe_nome',
				'$recebe_cpf',
				'$recebe_nascimento',
				'$recebe_email',
				'$recebe_telefone',
				'$recebe_endereco',
				'$recebe_numero',
				'$recebe_cep',
				'$recebe_referencia',
				'$recebe_senha',
				'$recebe_confirmasenha',
				'0')");


			header('location:index.php');

		}


?>