<!DOCTYPE html>
<html>
<head>
    <title>Virtus Rastreamento - Login</title>
    <link rel="stylesheet" href="../css/login.css"/>
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="message">
        <?php echo $msg; ?>
</div>
	<div class="login">
            <form class="" action="?acao=logar" method="post">
               <img src="../img/logo.png" alt="Virtus Rastreamento">
                <span><i class="fa fa-envelope"></i><input name="email" class="" type="text" placeholder="E-Mail" required></span>
                <span><i class="fa fa-key"></i><input name="pwd" class="" type="password" placeholder="Senha" required></span>
                <input name="ok" type="submit" value="Login" class="login-form-button">
                <a href="register.php">Registrar-se</a>
                <div class="clearfix"></div>
            </form>
        </div>
</body>
</html>