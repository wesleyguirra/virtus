<?php
ini_set('default_charset', 'utf-8');
// Passando os dados obtidos pelo formulário para as variáveis abaixo
		$emailfrom      = isset($_POST['email']) ? $_POST['email'] : '';
		$emailto        = 'vendas@virtusrastreamento.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
		$name          = isset($_POST['name']) ? $_POST['name'] : '';
		$t_id           = $_POST['t_id'];
		$address           = $_POST['address'];
		$district           = $_POST['district'];
		$uf           = $_POST['uf'];
		$p_code           = $_POST['p_code'];
		$phone           = $_POST['phone'];
		$c_phone           = $_POST['c_phone'];
		$c_brand           = $_POST['c_brand'];
		$c_plate           = $_POST['c_plate'];
		$c_model           = $_POST['c_model'];
		$c_year           = $_POST['c_year'];
		$c_color           = $_POST['c_color'];
		$access           = $_POST['access'];
		$m_payment           = $_POST['m_payment'];
		$o_siren           = $_POST['o_siren'];
		$o_block           = $_POST['o_block'];
		$o_panic           = $_POST['o_panic'];
		$obs           = $_POST['obs'];
		$withdrawal           = $_POST['withdrawal'];
		$assunto            = 'Formulário preenchido por '.$_SESSION['email'];
 
		/* Montando a mensagem a ser enviada no corpo do e-mail. */
		$mensagemHTML = '
		<style>
			body {
				background: #283142;
			}

			div {
				display: block;
				margin: 10px auto;
				width: 350px;
				background: #fff;
				border-radius: 10px;
				padding: 10px;
				box-shadow: 0px 0px 10px 0px rgba(50,50,50,0.1);
			}

			h1 {
				color:#2561d0;
				padding: 5px;
				font: 400 1.125rem Arial, Helvetica, sans-serif;
			}

			p {
				color: #283142;
				padding: 10px;
				box-shadow: 0px 0px 10px 0px rgba(50,50,50,0.1);
				font: 100 0.875rem Arial, Helvetica, sans-serif;
				border-radius: 5px;
			}

			span {
				color: #555;
				font: 700 0.875rem Arial, Helvetica, sans-serif;
			}
		</style>
		<div>

		<h1>Informações do Cliente</h1>

		<p><span>Nome:</span> '.$name.'
		<p><span>CPF ou CNPJ:</span> '.$t_id.'
		<p><span>Endereço:</span> '.$address.'
		<p><span>Bairro:</span> '.$district.'
		<p><span>UF:</span> '.$uf.'
		<p><span>CEP:</span> '.$p_code.'
		<p><span>Telefone:</span> '.$phone.'
		<p><span>Celular:</span> '.$c_phone.'

		<h1>Informações do Veículo</h1>

		<p><span>Marca/Fabricante:</span> '.$c_brand.'
		<p><span>Placa:</span> '.$c_plate.'
		<p><span>Modelo:</span> '.$c_model.'
		<p><span>Ano:</span> '.$c_year.'
		<p><span>Cor:</span> '.$c_color.'

		<h1>Valores em R$</h1>

		<p><span>Adesão:</span> '.$access.'
		<p><span>Mensalidade:</span> '.$m_payment.'
		<h1>Opcionais</h1>
		<p><span>'.$o_siren.'</span>
		<p><span>'.$o_block.'</span> 
		<p><span>'.$o_panic.'</span> 
		<p><span>Observações:</span> '.$obs.'
		<p><span>Envie o boleto por:</span> '.$withdrawal.'
		</div>';

//Enviando form
if ($startaction == 1){
	if ($acao == "enviar"){
		// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.
		$headers    = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: $emailfrom\r\n"; // remetente
		$headers .= "Return-Path: $emailfrom \r\n"; // return-path
		$envio = mail($emailto, $assunto, $mensagemHTML, $headers); 
	 
		 if($envio){
		 	// Mensagem enviada com sucesso
		 	echo '<script language="javascript">';
		    	echo 'alert("Sua mensagem foi enviada, responderemos em breve.")';
			echo '</script>';
		 }else{
		 	//Mensagem de erro
		 	echo '<script language="javascript">';
		    	echo 'alert("Aconteceu algo de errado, e não recebemos sua mensagem, tente novamente em alguns minutos.")';
			echo '</script>';
		 }
	}
}

?>