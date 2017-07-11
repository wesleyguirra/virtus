<!DOCTYPE html>
<html>
<head>
  <title>Virtus Rastreamento - Cadastro</title>
  <link rel="stylesheet" href="../css/login.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css"/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'/>
  <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'/>
  </head>
  <body>
      <div class="message">
        <?php echo $msg;?>
        </div>
	<div class="login">
            <form class="" action="?acao=cadastrar" method="post">
               <img src="../img/logo.png" alt="Virtus Rastreamento">
               <span><i class="fa fa-user"></i><input name="name" class="" type="text" placeholder="Digite seu nome"></span>
               <span><i class="fa fa-road"></i><input name="address" class="" type="text" placeholder="Digite seu endereço"></span>
               <span><i class="fa fa-phone"></i><input name="tel" class="" type="tel" placeholder="Telefone para contato"></span>
               <span><i class="fa fa-envelope"></i><input name="email" class="" type="text" placeholder="Digite seu e-mail"></span>
               <span><i class="fa fa-key"></i><input name="pwd" class="" type="password" placeholder="Digite sua senha"></span>
               <input name="ok" type="submit" value="Cadastrar" class="login-form-button">
               <a href="index.php">Voltar</a>
               <div class="clearfix"></div>
            </form>
        </div>
</body>
</html>