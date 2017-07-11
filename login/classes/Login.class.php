<?php
class Login{
	public function logar($email,$senha){
		$buscar=mysql_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' LIMIT 1");
		if (mysql_num_rows($buscar) == 1) {
			$dados=mysql_fetch_array($buscar);
			if($dados["status"] == 1){
				$_SESSION["email"]=$dados["email"];
				$_SESSION["senha"]=$dados["senha"];
				$_SESSION["nivel"]=$dados["nivel"];
				setcookie("logado",1);
				$log=1;
			}else{
				//Usuário não aprovado
				$flash="<span class=\"e-message\">Usuário bloqueado entre em contato com o suporte!<span>";
			}
		}
		if (isset($log)) {
			$flash="<span class=\"s-message\">Você foi logado com sucesso!</span>";
		}else{
			if(empty($flash)){
				//Email ou senha incorretos
				$flash="<span class=\"e-message\">Ops! e-mail ou senha incorretos!<span>";
			}
		}
		//Retorno para usuário
		echo $flash;
	}
}

?>