<?php 

require_once('Crud.class.php');

// DELETE USUARIO ↓
	$table = 'pergunta';
	$where = ' idPergunta = '.$_GET['idPergunta'];

	$crud = new Crud;
	$delete = $crud->delete($table,$where);

	header('Location:index.php?start=delete_'.$delete);
?>
