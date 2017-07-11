<?php
if ($startaction == 1){
	if ($acao == "cadastrar"){
		$nome=$_POST["name"];
		$end=$_POST["address"];
		$tel=$_POST["tel"];
		$email=$_POST["email"];
		$senha=$_POST["pwd"];

		if (empty($nome) || empty($end) || empty($tel) || empty($email) || empty($senha)){
			$msg="<span class=\"e-message\">Preencha todos os campos!</span>";
		}else{
			//Email válido
			if (filter_var($email,FILTER_VALIDATE_EMAIL)){
				//Senha inválida
				if (strlen($senha)<8){
					$msg="<span class=\"a-message\">Senha deve conter no minímo oito caracteres!</span>";
				}
				//Senha válida
				else{
					//Executa a classe cadastro
					$conectar=new Cadastro;
					echo "<span class=\"a-message\">";
					$conectar=$conectar->cadastrar($nome,$end,$tel,$email,$senha);
					echo "</span>";
				}
			}
			//Email inválido
			else{
				$msg="<span class=\"a-message\">Formato de email inválido!</span>";
			}
		}	
	}
}
?>