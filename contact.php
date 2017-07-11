<?php
include("login/includes/global.php");
ini_set('default_charset', 'utf-8');
$msg="";
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$name           = $_POST['name'];
$emailfrom      = $_POST['email'];
$emailto        = 'contato@virtusrastreamento.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$tel            = $_POST['tel'];
$assunto            = 'Mensagem de '.$_POST['name'];
$message            = $_POST['message'];
 
 
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

        <h1>Informações do cliente:</h1>

        <p><span>Nome:</span> '.$name.'
        <p><span>E-Mail:</span> '.$emailfrom.'
        <p><span>Telefone:</span> '.$tel.'
        <p><span>Mensagem:</span> '.$message.'
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
<!DOCTYPE html>

<html class="no-js" lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Virtus Rastreamento | Rastreador veicular com suporte 24h</title>
        
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                    Google APIs                    ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        

<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                    Outros Plugins                 ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->

        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/virtus.css">
        <link rel="stylesheet" href="css/virtus.internal.css">
        <link rel="stylesheet" href="css/modal.css">
        <script src="js/vendor/modernizr.js"></script>
        <script src="js/virtus.js"></script>    

    </head>
    <body>
        <section id="top-bar">
            <div class="row">
                <div class="small-12 column">
                       <div class="primary-navigation right">
                           <ul>
<!--                               <li>É um parceiro? então faça seu <a href="" data-reveal-id="broker-login-form">Login</a></li>-->
                          <li>É um parceiro? então faça seu <a href="/login">login</a></li>
                           </ul>
                       </div>
                </div>
            </div>
        </section>
        <section id="header">
            <div class="row">
                <div class="small-12 column">
                    <div class="row">
                        <div class="small-12 medium-5 column">
                            <div class="row head">
                                <div class="small-10 medium-9 column logo">
                                    <a href="index.php"><img src="img/logo.png" alt=""></a>
                                </div>
                                <div class="small-2 column show-for-small-only" id="mobile-anchor">
                                    <i class="fa fa-bars fa-2x right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 medium-7 column show-for-medium-up">
                            <div class="row head e-phones">
                                <div class="small-5 column"><img class="right" src="img/phoneCentral.jpg" alt=""></div>
                                <div class="small-3 column"><a href="contact.php"><img src="img/faleConosco.jpg" alt=""></a></div>
                                <div class="small-4 column"><img class="right" src="img/emergency-phone.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <menu>
            <ul>
                <li><a href="index.php">Ínicio</a></li>
                <li><a href="about.php">Empresa</a></li>
                <li><a href="products.php">Produtos &amp; Serviços</a></li>
                <li><a href="contact.php">Central de Atendimento</a></li>
                <li><a href="#" data-reveal-id="user-login-form">Acesso ao Sistema</a></li>
                <li><a href="https://play.google.com/store/apps/details?id=br.com.getrak">Baixe o APP</a></li>
            </ul>
        </menu>
        <nav id="menu-medium" class="show-for-medium-up">
            <div class="row">
                <div class="small-12 column">
                    <ul>
                        <li><a href="index.php">Ínicio</a></li>
                        <li><a href="about.php">Empresa</a></li>
                        <li><a href="products.php">Produtos &amp; Serviços</a></li>
                        <li><a href="contact.php">Central de Atendimento</a></li>
                        <li class="right"><a href="#" data-reveal-id="user-login-form">Acesso ao Sistema</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="secondary-header">
            <div class="row">
                <div class="small-12 column">
                    <div>
                        <h1>Entre em Contato</h1>
                        <h2>Somos uma empresa que se preocupa com a sua segurança.</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="row">
                <div class="medium-6 column">
                    <i class="fa fa-phone"><span>11 4969-5192</i>
                    <i class="fa fa-phone"><span>11 3438-2998</span></i>
                    <i class="fa fa-envelope"><span>contato@virtusrastreamento.com.br</span></i>
                    <i class="fa fa-envelope"><span>vendas@virtusrastreamento.com.br</span></i>
                </div>
                <div class="medium-6 column">
                   <div><?php echo $msg ?></div>
                    <form method="post" action="?acao=enviar">
                        <input name="name" type="text" placeholder="Nome" required>
                        <input name="email" type="text" placeholder="E-Mail" required>
                        <input name="tel" type="tel" placeholder="Telefone" required>
                        <textarea name="message" id="" placeholder="Mensagem" required></textarea>
                        <input name="send" type="submit" value="Enviar" class="login-form-button">
                        <input name="clear" type="reset" value="Limpar" class="login-form-button">
                    </form>
                </div>
            </div>
        </section>
        <footer id="primary-footer">
            <div class="row">
                <div class="small-12 column">
                    <a href="" data-reveal-id="sitemap">Mapa do Site</a>
                </div>
            </div>
        </footer>
        <footer id="more-links">
           <div class="row">
               <div class="small-12 column">
                   <a>Links Úteis</a>
               </div>
           </div>
        </footer>
        <footer id="links">
            <div class="row">
               <div class="medium-4 column">
                   <ul>
                        <li><i class="fa fa-file-text-o"></i><a href="" data-reveal-id="terms">Termos de uso</a></li>
                    </ul>
                </div>
                <div class="medium-4 column">
                    <ul>
                        <li><i class="fa fa-file-text-o"></i><a href="" data-reveal-id="privacy">Política de privacidade</a></li>
                    </ul>
                </div>
                <div class="medium-4 column">
                    <ul>
                        <li><i class="fa fa-suitcase"></i><a>Trabalhe conosco</a></li>
                    </ul>
                </div>
                <div class="medium-4 column">
                    <ul>
                        <li><i class="fa fa-barcode"></i><a>2ª via de boleto</a></li>
                    </ul>
                </div>
                <div class="medium-4 column">
                    <ul>
                        <li><i class="fa fa-money"></i><a href="#" data-reveal-id="partners">Revenda</a></li>
                    </ul>
                </div>
                <div class="medium-4 column">
                    <ul>
                        <li><i class="fa fa-external-link"></i><a href="#" data-reveal-id="partners">Parceiros</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <footer id="bottom">
           <div class="row">
            <div class="small-12 column">
                <p>© 2014 Virtus Rastreamento todos os direitos reservados.<a target="_blank" href="http://facebook.com/virtusrastreamento"><i class="fa fa-facebook right"></i></a><i class="fa fa-google-plus right"></i>
            </div></p>
           </div>
        </footer>
        
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::              Partner's Register                   ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->
       
        <div id="partner-register-form" class="reveal-modal small login-form-modal" data-reveal>
            <a class="close-reveal-modal"><i class="fa fa-close"></i></a>
            <form class="broker-login" action="">
                <h5>Cadastre-se</h5>
                <span><i class="fa fa-user"></i><input name="name" type="text" placeholder="Nome"></span>
                <span><i class="fa fa-envelope"></i><input name="email" class="" type="text" placeholder="E-Mail"></span>
                <span><i class="fa fa-user"></i><input name="user" class="" type="text" placeholder="Usuário"></span>
                <span><i class="fa fa-key"></i><input name="pwd" class="" type="password" placeholder="Senha"></span>
                <span><i class="fa fa-key"></i><input name="pwdconfirm" class="" type="password" placeholder="Confirme a senha"></span>
                <input name="ok" type="submit" value="Cadastrar" class="login-form-button">
            </form>
        </div>
        
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                 Partner's Modal                   ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->

       <div id="partners" class="reveal-modal small" data-reveal>
           <i class="close-reveal-modal">&#215;</i>
               <a href="/login">Login</a>
<!--                <a href="" data-reveal-id="broker-login-form">Login</a>-->
                <a href="/login/register.php">Cadastre-se</a>
        </div>
        
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                   User's Login                    ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->
       <div id="user-login-form" class="reveal-modal small login-form-modal" data-reveal>
            <a class="close-reveal-modal"><i class="fa fa-close"></i></a>
            <form action="http://sis.getrak.com/virtusrastreamento/validalogin.php">
                <h5>Rastreamento WEB</h5>
                <span><i class="fa fa-user"></i><input name="login" type="text" placeholder="Usuário" required></span>
                <span><i class="fa fa-key"></i><input name="senha" class="" type="password" placeholder="Senha" required></span>
                <input name="ok" type="submit" value="Entrar" class="login-form-button">
            </form>
        </div>
        
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                  Broker's Login                   ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->
       
        <div id="broker-login-form" class="reveal-modal small login-form-modal" data-reveal>
            <a class="close-reveal-modal"><i class="fa fa-close"></i></a>
            <form class="broker-login" action="">
                <h5>Entre com as suas credenciais</h5>
                <span><i class="fa fa-user"></i><input name="login" type="text" placeholder="Código"></span>
                <span><i class="fa fa-key"></i><input name="senha" class="" type="password" placeholder="Senha"></span>
                <input name="ok" type="submit" value="Entrar" class="login-form-button">
            </form>
        </div>       
         
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                   Broker's Form                   ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->

       <div id="broker-form" class="reveal-modal small broker-form" data-reveal>
              <a class="close-reveal-modal">&#215;</a>
               <h5>Corretor, por favor preencha o formulário.</h5>
                <form action="sent.php" method="post">
                    <h4>Identificação do solicitante</h4>
                    <input type="text" placeholder="Nome" name="nm" required>
                    <input type="text" placeholder="CPF ou CNPJ" name="dc" required>
                    <input type="text" placeholder="Endereço" name="st" required>
                    <input type="text" placeholder="Bairro" name="hq" required>
                    <input type="text" placeholder="Estado" name="uf" required>
                    <input type="text" placeholder="CEP" maxlength="9" name="pc" required>
                    <input type="tel" placeholder="Telefone" name="ph" required>
                    <input type="tel" placeholder="Celular" name="cp" required>
                    <input type="email" placeholder="E-Mail" name="em" required>
                    <h4>Identificação do veículo</h4>
                    <input type="text" placeholder="Marca/Fabricante" name="bd" required>
                    <input type="text" placeholder="Placa" maxlength="8" name="pt" required>
                    <input type="text" placeholder="Modelo" name="md" required>
                    <input type="text" placeholder="Ano" maxlength="4" name="yr" required>
                    <input type="text" placeholder="Cor" name="cl" required>
                    <h4>Opcionais</h4>
                    <input type="checkbox" value="Sirene" name="sn"><span>Sirene</span>
                    <input type="checkbox" value="Bloqueio" name="bl"><span>Bloqueio</span>
                    <input type="checkbox" value="Pânico" name="pn"><span>Pânico</span>
                    <textarea name="obs" id="" cols="30" rows="10" placeholder="Observações"></textarea>
                    <h4>Valores em R$</h4>
                    <input type="text" placeholder="Adesão" name="ad" required>
                    <input type="text" placeholder="Mensalidade" name="mp" required>
                    <input type="text" placeholder="Código do vendedor" maxlength="4" name="sc" required>
                    <h4>Deseja que o boleto seja enviado por:</h4>
                    <input type="radio" name="sb" value="E-Mail" required><span>E-Mail</span>
                    <input type="radio" name="sb" value="Correios" required><span>Correios</span>
                    <input type="submit" class="login-form-button" value="Enviar">
                </form>
            </div>
            
<!--:::::::::::::::::::::::::::::::::::::::::::::::::::
::                      Privacy                      ::
::::::::::::::::::::::::::::::::::::::::::::::::::::-->

            <div id="privacy" class="reveal-modal" data-reveal>
              <a class="close-reveal-modal">&#215;</a>
                <span>O site Virtus na internet destina-se aos clientes que utilizam o sistema de rastreamento contratado.

A Virtus se obriga, nos termos da legislação em vigor, a garantir a privacidade dos usuários deste site. Para tanto, declara expressamente não dispor de quaisquer mecanismos que identifiquem pessoalmente os usuários e/ou seus respectivos endereços eletrônicos, exceto quando por estes voluntariamente prestados. Esta Política de Privacidade se aplica à obtenção, uso e revelação de Informações Pessoais em nosso website <br><br>

A Virtus obriga-se expressamente a não coletar e não repassar a terceiros quaisquer informações que impliquem na identificação pessoal do usuário, exceto quando por estes expressamente autorizados. “Informações Pessoais” são informações fornecidas que identificam você pessoalmente, incluindo, por exemplo, seu nome completo, endereço, telefone e endereço de e-mail<br><br>

Nós obtemos as suas informações pessoais quando você nos envia uma informação ou um pedido (por meio deste website ou de alguma outra forma). Nós usamos essas informações para o envio dos e-mails que você pediu (enviando orçamentos ou informações sobre o sistema). <br><br>

A Virtus declara desde já que contabiliza os números de visitação deste site e de suas páginas subjacentes, inclusive mediante utilização de cookies, de forma a melhorar a qualidade dos mesmos. As análises estatísticas e genéricas sobre o comportamento dos usuários poderão não serão partilhadas com terceiros. <br><br>

A Virtus implementou e segue medidas padrões para se proteger contra acesso não autorizado e intercepção ou processamento de Informações Pessoais. <br><br>

Mudanças na Política de Privacidade <br>

A Virtus pode alterar esta política de privacidade de tempos em tempos. Caso haja alguma mudança substancial na forma de utilização das suas informações, iremos notificá-lo com um anúncio em destaque em nosso site.</span>
            </div>
            
        
<!--
:::::::::::::::::::::::::::::::::::::::::::::::::::::::
::                     Term's Modal                  ::
:::::::::::::::::::::::::::::::::::::::::::::::::::::::
-->
       
       <div id="terms" class="reveal-modal" data-reveal>
              <a class="close-reveal-modal">&#215;</a>
                <span> O site da Virtus pode ser visualizado por qualquer pessoa que tenha acesso à Rede Mundial de Computadores, que tem o intuito de atender às necessidades dos usuários, disponibilizando no site (www.virtusrastreamento.com.br) informações, dados e materiais da marca e seus produtos. <br><br>

Para acessar este site, usuários menores de idade devem obter a prévia permissão de seus pais, tutores ou representantes legais, os quais serão considerados plenamente responsáveis por todos os atos praticados pelos menores, assim como pelos conteúdos e serviços por eles acessados. <br><br>

Devido à possibilidade de erro humano ou mecânico, bem como a outros fatores, o site www.virtusrastreamento.com.br não responde por quaisquer erros ou omissões, dado que toda informação é provida "tal como está" sem nenhuma garantia de qualquer espécie. Nenhuma informação ou opinião aqui expressada constitui uma solicitação ou proposta de compra ou venda. <br><br>

Nem o site www.virtusrastreamento.com.br , nem seus executivos, associados, empregados, procuradores ou consultores serão responsáveis perante qualquer pessoa, por qualquer tipo de perda, dano, custo ou despesa resultante de qualquer erro, omissão, ou alteração nas informações aqui fornecidas, nem tampouco por quaisquer atrasos, inexatidões, erros, ou interrupções ocasionados em função destes eventos, durante o suprimento de qualquer informação através das páginas do site, nem, ainda, por vírus de computador ou por qualquer prejuízo resultante do acesso não autorizado ou por qualquer outro mau uso do sistema através do qual a informação sobre o site www.virtusrastreamento.com.br é transmitida, nem mesmo por qualquer descontinuidade do serviço. <br><br>

A Virtus apresenta logotipo e marca exibida neste site, que não podem ser usados pelos usuários sem a permissão prévia e escrita da Virtus. <br><br>

Todos os demais materiais apresentados no site, tais como imagens, informações, gráficos, entre outros, também estão protegidos por direitos autorais, portanto não podem ser reproduzidos, modificados sem o nosso prévio consentimento por escrito. <br><br>

A utilização indevida do logotipo marca ou materiais do site poderá acarretar a aplicação de sanções, conforme legislação vigente à época. <br><br>

Este Termo poderá ser atualizado a qualquer momento, porém a Virtus se compromete a mantê-lo atualizado neste endereço. Por conta disso, orientamos que você reveja o Termo regularmente, ficando sempre ciente das possíveis alterações realizadas. <br><br>

Embora use todas as ferramentas e medidas necessárias para garantir o pleno funcionamento de seu site, a Virtus não pode garantir que ele funcionará ininterruptamente e livres de erros, não podendo ser responsabilizada por isso. <br><br>

O provimento de condições apropriadas de acesso à Internet é de responsabilidade da prestadora de serviços contratada pelo usuário para tal finalidade (provedor). Em caso de perda de conexão à Internet, no momento da realização do cadastro ou no envio de informações, não será devida qualquer indenização por parte da Virtus, tendo o usuário que aceitar a implicação da eventual falha. </span>
            </div>
            
            <div id="sitemap" class="reveal-modal" data-reveal>
              <a class="close-reveal-modal">&#215;</a>
              <div class="row">
                  <div class="medium-4 column">
                      <ul>
                          <li><h5>Serviços &amp; Produtos</h5></li>
                          <li><a href="">Produtos Virtus</a></li>
                          <li><a href="">Monitoramento WEB</a></li>
                          <li><a href="">Serviços &amp; Produtos</a></li>
                      </ul>
                  </div>
                  <div class="medium-4 column">
                      <ul>
                          <li><h5>A Virtus</h5></li>
                          <li><a href="about.php">Sobre a Virtus</a></li>
                          <li><a href="about.php">Missão e Visão</a></li>
                          <li><a href="about.php">Valores</a></li>
                      </ul>
                  </div>
                  <div class="medium-4 column">
                      <ul>
                          <li><h5>Contato</h5></li>
                          <li><a href="contact.php">Fale Conosco</a></li>
                          <li><a href="contact.php">Trabalhe Conosco</a></li>
                          <li><a>Inprensa</a></li>
                      </ul>
                  </div>
                  <div class="medium-4 column">
                      <ul>
                          <li><h5>Sou cliente Virtus</h5></li>
                          <li><a href="contact.php">Solicitações e Dúvidas</a></li>
                          <li><a href="contact.php">Solicitações de retirada ou cancelamento</a></li>
                          <li><a href="">Solicitação de 2ª via de boleto</a></li>
                      </ul>
                  </div>
                  <div class="medium-4 column">
                      <ul>
                          <li><h5>Nossas soluções</h5></li>
                          <li><a href="products.php">Rastreador Virtus Carro</a></li>
                          <li><a href="products.php">Rastreador Virtus Moto</a></li>
                          <li><a href="products.php">Rastreador Virtus Caminhão</a></li>
                          <li><a href="products.php">Rastreador Virtus Máquinas</a></li>
                          <li><a href="products.php">Soluções para frotas</a></li>
                      </ul>
                  </div>
                  <div class="medium-4 column">
                      <ul>
                          <li><h5>Parceiros</h5></li>
                          <li><a href="">Sou Corretor</a></li>
                          <li><a href="">Sou Lojista</a></li>
                          <li><a>Seja parceiro</a></li>
                      </ul>
                  </div>
              </div>
            </div>

<!--   Foundation -->
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
    
    </body>
</html>