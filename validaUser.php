<?php 

session_start();

include 'conexao.php';

$recebe_email = $_POST['txtEmail'];
$recebe_senha = $_POST['txtSenha'];

$consulta = $conexao->query("SELECT id_user,txtEmail,txtSenha,adm FROM users WHERE txtEmail='$recebe_email' AND txtSenha='$recebe_senha'");

if ($consulta->rowCount()==1) {


	$exibeUser=$consulta->fetch(PDO::FETCH_ASSOC);

	if ($exibeUser['adm']==1) {

		$_SESSION['id']=$exibeUser['id_user'];
		$_SESSION['adm']=1;
		
		header('location:index.php');

	}


	else {

		$_SESSION['id']=$exibeUser['id_user'];
		$_SESSION['adm']=0;
		
		header('location:index.php');


	}


}

else {

	header('location:erro.php');

}

?>