<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Virtus Rastreamento - Área do parceiro</title>
    <link rel="stylesheet" href="../css/foundation.min.css"/>
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/painel.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
       <section id="top-bar">
            <div class="row">
                <div class="small-12 column top-bar">
                    <img class="logo-white" src="../img/logo-white.png" alt="Virtus Rastreamento">
                    <a href="index.php?acao=logout"><i class="fa fa-sign-out right"><span>Sair</span></i></a>
                </div>
            </div>
       </section>
        <section id="menu">
            <div class="row">
                <div class="small-6 column">
        <?php
        if ($nivel == 2) {
        ?>
                    <ul>
                        <li class="ni"><a href="">Usuários</a></li>
                        <li class="ni"><a href="">Gerenciar usuários</a></li>
                    </ul>
        <?php }else{?>
                    <ul>
                        <li class="ni"><a href="">Formulário de venda</a></li>
                    </ul>
        <?php } ?>
                </div>
            </div>
        </section>
       <div class="row">
        <div class="small-12 column container">
            <div class="row">
                   <div class="small-12 column">
                       <div class="row">
                        
                        <?php
                        if ($nivel == 2) {
                        ?>
                        
                       <div class="small-12 column">
                           <section id="adm">
                               <article class="tab-content">
                                   <table width="100%" border="0">
                                       <tr>
                                           <th>Nome</th>
                                           <th>Endereço</th>
                                           <th>Telefone</th>
                                           <th>E-mail</th>
                                        </tr>
                                        <tr>
                        <?php
                        $buscarusuarios=mysql_query("SELECT * FROM usuarios WHERE nivel=1");
                        if (mysql_num_rows($buscarusuarios) == 0) {
                        echo "Nenhum usuário cadastrado no sistema";
                        }else{
                        while ($linha=mysql_fetch_array($buscarusuarios)) {
                        ?>
                                            <td><?php echo $linha["nome"];?></td>
                                            <td><?php echo $linha["end"];?></td>
                                            <td><?php echo $linha["tel"];?></td>
                                            <td><?php echo $linha["email"];?></td>
                                        </tr>
                        <?php } } ?>
                                    </table>
                                </article>
                                <article class="tab-content">
                        <?php
                        if ($nivel == 2) {
                        ?>
                                    <div>
                                        <table width="100%" border="0">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                            <tr>
                        <?php
                        $buscarusuarios=mysql_query("SELECT * FROM usuarios WHERE nivel=1");
                        if (mysql_num_rows($buscarusuarios) == 0) {
                        echo "Nenhum usuário cadastrado no sistema";
                        }else{
                        while ($linha=mysql_fetch_array($buscarusuarios)) {
                        ?>
                                                <td><?php echo $linha["nome"];?></td>
                                                <td><?php if ($linha["status"] == 0) {echo "<span class=\"user-block\">Inativo</span>";}else{echo "<span class=\"user-active\">Ativo</span>";}?></td>
                                                <td><?php $id=$linha["ID"]; if ($linha["status"] == 0) {echo "<a href=\"index.php?acao=aprovar&amp;id=$id\">Aprovar</a>";}else{echo "<a href=\"index.php?acao=bloquear&amp;id=$id\">Bloquear</a>";}?></td>
                                            </tr>
                        <?php } } ?>
                                        </table>
                                    </div>
                        <?php }else{?>
                        <?php } ?>
                                </article>
                            </section>
                        
                        <?php }else{?>
                        
                        <section id="content">
                            <article class="tab-content">
                                <div id="broker-form" class="broker-form">
                                    <h5>Corretor, por favor preencha o formulário.</h5>
                                    <div class="row">
                                        <div class="medium-4 column">
                                            <form action="index.php?acao=enviar" method="post">
                                            <h4>Identificação do solicitante</h4>
                                            <input type="text" placeholder="Nome" name="name" required>
                                            <input type="text" placeholder="CPF ou CNPJ" name="t_id" required>
                                            <input type="text" placeholder="Endereço" name="address" required>
                                            <input type="text" placeholder="Bairro" name="district" required>
                                            <input type="text" placeholder="Estado" name="uf" required>
                                            <input type="text" placeholder="CEP" maxlength="9" name="p_code" required>
                                            <input type="tel" placeholder="Telefone" name="phone" required>
                                            <input type="tel" placeholder="Celular" name="c_phone" required>
                                            <input type="email" placeholder="E-Mail" name="email" required>
                                        </div>
                                        <div class="medium-4 column">
                                            <h4>Identificação do veículo</h4>
                                            <input type="text" placeholder="Marca/Fabricante" name="c_brand" required>
                                            <input type="text" placeholder="Placa" maxlength="8" name="c_plate" required>
                                            <input type="text" placeholder="Modelo" name="c_model" required>
                                            <input type="text" placeholder="Ano" maxlength="4" name="c_year" required>
                                            <input type="text" placeholder="Cor" name="c_color" required>
                                            <h4>Valores em R$</h4>
                                            <input type="text" placeholder="Adesão" name="access" required>
                                            <input type="text" placeholder="Mensalidade" name="m_payment" required>
                                        </div>
                                        <div class="medium-4 column">
                                            <h4>Opcionais</h4>
                                            <input type="checkbox" value="Sirene" name="o_siren"><span>Sirene</span>
                                            <input type="checkbox" value="Bloqueio" name="o_block"><span>Bloqueio</span>
                                            <input type="checkbox" value="Pânico" name="o_panic"><span>Pânico</span>
                                            <textarea name="obs" id="" cols="30" rows="10" placeholder="Observações"></textarea>
                                            <h4>Deseja que o boleto seja enviado por:</h4>
                                            <input type="radio" name="withdrawal" value="E-Mail" required checked><span>E-Mail</span>
                                        </div>
                                            <div class="clear-fix"></div>
                                            <input type="submit" class="button" value="Enviar">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                        <?php } ?>
                        
                        <div class="small-12 column">
                            <footer>
                                <span class="right">© 2014 Virtus Rastreamento todos os direitos reservados.</span>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            

    <script src="../js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script>
        $(document).ready(function(){
            $('.tab-content').hide();
            $('.tab-content:eq(0)').show();
            $('.ni:eq(0)').addClass('ni-active');
            $('.ni').click(function(e){
            e.preventDefault();
            var i = $(this).index();
            $('.ni').removeClass('ni-active');
            $(this).addClass('ni-active');
            $('.tab-content').hide();
            $('.tab-content:eq('+i+')').fadeIn();
    });
        });
    </script>
</body>
</html>