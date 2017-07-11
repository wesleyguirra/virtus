<?php
if ($startaction == 1){
	if ($acao == "logar"){
		//Dados
		$email=addslashes($_POST['email']);
		$senha=addslashes(sha1($_POST['pwd']."virtus"));

		if (empty($email) || empty($senha)) {
			$msg="<span class=\"e-message\">Preencha todos os campos!</span>";
		}else{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$msg="<span class=\"a-message\">Formato de email inválido!</span>";
			}else{
				//Executa a busca pelo usuário
				$login= new Login;
				echo
				$login=$login->logar($email,$senha);
			}
		}
	}
}
?>