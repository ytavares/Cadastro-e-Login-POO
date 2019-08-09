<?php
    require_once ("classes/DAO/assinanteDAO.php");
    require_once ("classes/Entidade/assinante.php");

    $assinanteDAO = new assinanteDAO();
    $assinante = new assinante();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
<script src="JS/cadastro.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>

    
</head>
<body>

<form class="form-horizontal" method="POST">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Assinante</div>
    
    <div class="panel-body">
<div class="form-group">

<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="tNome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="tCpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="tEmail" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Senha <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="senha" name="tSenha" placeholder="Max 16" class="form-control input-md" required="" type="password" maxlength="16" pattern="[0-9]+$">
</div>


<!-- Search input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-2">
    <input id="cep" name="tCep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
  </div>
  <div class="col-md-2">
      <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
    </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rua</span>
      <input id="rua" name="tEndereco" class="form-control" placeholder="" required="" readonly="readonly" type="text">
    </div>
    
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Nº <h11>*</h11></span>
      <input id="numero" name="tNumero" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
  
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Bairro</span>
      <input id="bairro" name="tBairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
    </div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cidade</span>
      <input id="cidade" name="tCidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
    </div>
    
  </div>
  
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Estado</span>
      <input id="estado" name="tUf" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
    </div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="tCadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>

<?php

if(isset($_POST['tCadastrar'])) {

    $assinante->setNomeAssinante($_POST['tNome']);
    $assinante->setCpf($_POST['tCpf']);
    $assinante->setEmail($_POST['tEmail']);
    $assinante->setSenha($_POST['tSenha']);
    $assinante->setCep($_POST['tCep']);
    $assinante->setEndereco($_POST['tEndereco']);
    $assinante->setNumero($_POST['tNumero']);
    $assinante->setBairro($_POST['tBairro']);
    $assinante->setCidade($_POST['tCidade']);
    $assinante->setUf($_POST['tUf']);
    
    $assinanteDAO->Cadastrar($assinante);

    ?><script>swal("Cadastradocomsucesso!", "Seja Bem Vindo!", "success");window.location.href='index.php'</script>;
    <?php

}


