<?php

session_start();
require_once ("classes/DAO/assinanteDAO.php");

$assinanteDAO = new assinanteDAO();

if(isset($_POST['tLogar'])) {
  if($assinanteDAO->login($_POST['tEmail'], $_POST['tSenha'])) {
    $_SESSION['logado'] = '1';

      header ("location: home.html");
  } else {
      echo "<script>alert('Email ou senha inválido.');window.history.back()</script>";
  }
}
?>