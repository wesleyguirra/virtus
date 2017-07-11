<?php
ini_set('default_charset', 'utf-8');

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$msg 			="";
$name     		= $_POST['name'];
$emailfrom 		= $_POST['email'];
$emailto 		= 'contato@virtusrastreamento.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$tel      	   	= $_POST['tel'];
$assunto          	= $_POST['message'];
$message          	= $_POST['message'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Formulário preenchido no site.</P>
<p><b>Nome:</b> '.$name.'
<p><b>E-mail:</b> '.$emailfrom.'
<p><b>Telefone:</b> '.$tel.'
<p><b>Mensagem:</b> '.$message.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers	= "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailfrom\r\n"; // remetente
$headers .= "Return-Path: $emailfrom \r\n"; // return-path
$envio = mail($emailto, $assunto, $mensagemHTML, $headers); 
 
 if($envio){
 	$msg="<span class=\"s-message\">Obrigado por entrar em contato retornaremos em breve.</span>";
 }else{
 	$msg="<span class=\"e-message\">Ocorreu algo inesperado tente novamente em alguns minutos.</span>";
 }
	
?>
