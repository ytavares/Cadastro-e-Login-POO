<?php

session_start();
require_once ("classes/DAO/assinanteDAO.php");

$assinanteDAO = new assinanteDAO();

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/login.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="media/login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form nome="login" method="POST" action="logar.php">
      <input type="text" id="login" class="fadeIn second" name="tEmail" placeholder="E-mail">
      <input type="password" id="password" class="fadeIn third" name="tSenha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" name="tLogar" value="Logar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
        Ainda não tem conta?
      <a class="underlineHover" href="cadastro.php">Cadastrar-se</a>
    </div>

  </div>
</div>



  

