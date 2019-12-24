<?php 

require_once('Crud.class.php');

if (!empty($_POST)) 
{
	$idPergunta = $_POST['idPergunta'];
	$descricaoPergunta = $_POST['descricaoPergunta'];
	$lowValue = $_POST['lowValue'];
	$highValue = $_POST['highValue'];
	$tipoPergunta = $_POST['tipoPergunta'];
	// Campos a adicionar no banco de dados


	$table = 'pergunta';
	$setValues = " descricaoPergunta = '".$descricaoPergunta."', lowValue = '".$lowValue."', highValue = '".$highValue."', tipoPergunta = '".$tipoPergunta."' ";
	$where = " idPergunta = '$idPergunta' ";

	$crud = new Crud;
	$update= $crud->update($table,$setValues,$where);

	// echo $update;
	header('Location:index.php?start=update_'.$update);
}



?>


