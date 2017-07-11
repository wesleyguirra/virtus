<?php
  include("includes/header.php");
  if (isset($logado)) {
    include("painel/home.php");
  }else{
    include("painel/cadastro.php");
  }
?>