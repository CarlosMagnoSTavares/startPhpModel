<?php

class Conn
{
	public function conectar()
	{
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$dbname = "presenteador";
		$con = mysqli_connect($servidor, $usuario, $senha, $dbname);
		return  $con;
		mysql_set_charset('utf8');
	}
}

?>