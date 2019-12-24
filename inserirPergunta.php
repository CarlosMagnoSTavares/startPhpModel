

<?php 

	// Chama a classe CRUD (conexão com o MYSQL dentro dela)
require_once('Crud.class.php');


	// Recebe dados do POST ↓
if (!empty($_POST)) {
	
	// Campos a adicionar no banco de dados
	$descricaoPergunta = $_POST['descricaoPergunta'];
	$lowValue = $_POST['lowValue'];
	$highValue = $_POST['highValue'];
	$tipoPergunta = $_POST['tipoPergunta'];
	// Fim campos

	// Inicio da montagem dos parametros da query
	// Define values
	$values =  array($descricaoPergunta,$lowValue,$highValue,$tipoPergunta);
	// Define as colunas
	$columns = array ('descricaoPergunta','lowValue','highValue','tipoPergunta');
	// Define a tabela
	$table = 'pergunta';
	// Fim dos parametros da query

	// Cria objeto Crud
	$crud = new Crud;
	// Chama o insert do Crud
	$insert = $crud->insert($table,$columns,$values);
	// Escreve a resposta na frente da URL
	header('Location:index.php?start=insert_'.$insert);
}
	// Fim do POST

?> 

<!-- Se o post estiver vazio, cria o form abaixo

     Formulario Insercao de pergunta -->
<form accept="utf8" method="POST" action="">

	<!-- Monta formulario -->
	<br>Descrição da pergunta <input type="text" name="descricaoPergunta">
	<br>Valor mínimo <input type="text" name="lowValue">
	<br>Valor máximo <input type="text" name="highValue">

	<!-- Exibe dropdown preenchido do banco -->
	<?php 
		// Preenchimento do dropdown com os tipos de escolha

		// Cria o Crud e executa o select na variável $table
		$crud2 = new Crud;
		$table = 'tipopergunta';
		$result = $crud2->select($table);
		// Fim do crud e $result preenchido com campos do dropdown

		// Inicia dropdown
		echo "<br><select name='tipoPergunta'>";
		// Coloca texto como default para o dropdown
		echo "<option value='0' style='display:none;'' selected> Tipo escolha</option>";

		// Da o loop nos resultados extraidos do banco
		foreach ($result as $key => $value) 
		{
		// Preenche o dropdown com os valores das colunas nos campos value
			echo "<option value='" . $value['idTipoPergunta'] . "'>" . $value['tipoEscolha'] . "</option>";
		}
		// Finaliza o select
		echo "</select>";

    ?>
	<!-- Envia o form via post (form method) -->
	<br><input type="submit" name="" value="Cadastrar Pergunta">
</form>
<!-- Fim Formulario Insercao de pergunta -->
