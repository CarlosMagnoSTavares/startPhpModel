<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Listar Perguntas</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<?php 

require_once('Crud.class.php');

// LISTA USUARIOS ↓
	$table = 'pergunta';
	$where = "idPergunta > 0";
	$orderBy =" idPergunta asc ";
	$limit = "999";

	$crud = new Crud;
	$list = $crud->select($table,$where,$orderBy,$limit);


	foreach ($list as $key => $value) 
		{
			echo '<form method="POST" action="atualizarPergunta.php">'.
			 '<input hidden readonly="true"  type="int" name="idPergunta" value="'.$value['idPergunta'].'">'.
			 '<br> Descrição: <input type="text" size="50" name="descricaoPergunta" value="'.$value['descricaoPergunta'].'"><br>'.
			 ' Valor mínimo: <input type="int" size="2" name="lowValue" value="'.$value['lowValue'].'">'.
			 ' Valor máximo: <input type="int" size="2" name="highValue" value="'.$value['highValue'].'">'.
 			 ' Tipo Pergunta: <input type="int" name="tipoPergunta" size="2" value="'.$value['tipoPergunta'].'">'.
			 '<input type="submit" name="Atualiza" value="Alterar pergunta">'.
			 '<a href="excluirPergunta.php?idPergunta='.$value['idPergunta'].'">Excluir</a>'.
			 '</form>';

			//echo '<form method="POST" action="updateUser.php">'.
			//		 ' <input hidden readonly="true"  type="text" name="id" value="'.$value['idPergunta'].'">'.
			//		 ' nome: <input type="text" name="nome" value="'.$value['lowValue'].'">'.
			//		 ' sobrenome: <input type="text" name="sobrenome" value="'.$value['highValue'].'">'.
			//		 '<input type="submit" name="Atualiza" value="Atualiza">'.
			//		 '<a href="deleteUser.php?id='.$value['ID'].'">Deleta</a>'.
			//		 "<br>".
			//	  '</form>';
		}
?>
<br>


