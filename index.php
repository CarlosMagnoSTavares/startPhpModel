<?php 

require_once('Crud.class.php');

// LISTA USUARIOS ↓
	$table = 'usuarios';
	$where = "id > 0";
	$orderBy =" id desc ";
	$limit = "999";

	$crud = new Crud;
	$list = $crud->select($table,$where,$orderBy,$limit);

	foreach ($list as $key => $value) 
		{
			echo '<form method="POST" action="updateUser.php">'.
					 ' <input hidden readonly="true"  type="text" name="id" value="'.$value['ID'].'">'.
					 ' nome: <input type="text" name="nome" value="'.$value['nome'].'">'.
					 ' sobrenome: <input type="text" name="sobrenome" value="'.$value['sobrenome'].'">'.
					 '<input type="submit" name="Atualiza" value="Atualiza">'.
					 '<a href="deleteUser.php?id='.$value['ID'].'">Deleta</a>'.
					 "<br>".
				  '</form>';
		}
?>
<br>
<a href="insertUser.php">Inserir novo usuario</a>

