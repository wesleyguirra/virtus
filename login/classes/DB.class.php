<?php
	class DB{
		public function conectar(){
			$host="mysql.virtusrastreamento.com.br";
			$user="virtusrastream";
			$pass="virtus2014aa";
			$dbname="virtusrastream";

			$conexao=mysql_connect($host,$user,$pass);
			$selectdb=mysql_select_db($dbname);
			$selectcharset=mysql_set_charset('utf8');

			return $conexao;
		}
	}
?>