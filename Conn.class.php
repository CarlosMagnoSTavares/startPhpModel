<?php

class Conn
{
	public function conectar()
	{
		$servidor = "localhost";
		$usuario = "srv_mouts";
		$senha = "fh57d3";
		$dbname = "modelo";
		$con = mysqli_connect($servidor, $usuario, $senha, $dbname);
		return  $con;
	}
}

?>