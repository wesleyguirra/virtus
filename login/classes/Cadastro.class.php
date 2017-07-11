<?php
class Cadastro{
	public function cadastrar($nome,$end,$tel,$email,$senha){
		//Tratamento de váriaveis
		$nome=ucwords(strtolower($nome));
		$end=ucwords(strtolower($end));
		$tel=ucwords(strtolower($tel));
		$senha=sha1($senha."virtus");
		
		//Inserção no banco de dados
		$procuraemail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
		$verificaemail=mysql_num_rows($procuraemail);
		if ($verificaemail == 0) {
			$insert=mysql_query("INSERT INTO usuarios(nome,end,tel,email,senha,nivel,status) VALUES('$nome','$end','$tel','$email','$senha',1,0)");
		}else{
			$flash="Já existe um usuário utilizando este endereço de e-mail!";
		}
			if (isset($insert)){
				$flash="Cadastro Realizado com sucesso! Aguarde a aprovação do seu cadastro.";
			}else{
				if(empty($flash)) {
					$flash="Ops aconteceu algo inesperado tente novamente em alguns minutos...";
				}
			}

		//Retorno para usuário
		echo $flash;
	}
}
?>