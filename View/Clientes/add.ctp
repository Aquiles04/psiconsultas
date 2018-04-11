<!DOCTYPE HTML>
<html>
	<head>
		<title>Psiconsultas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<?php
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->script('bootstrap.min.js');

		echo $this->Html->css('AdminLTE.min.css');
		echo $this->Html->script('adminlte.min.js');

		echo $this->fetch('css');
		echo $this->fetch('script');
		// logo abaixo vem aquele fundinho maroto
		?>
		<style>
		body {
		   background: url(/cakephp/img/header.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		</style>
	</head>
	<body>
		
<br>
<div class="col-md-6">
    <div class="box box-primary col-md-12">
        <div class="box-header with-border ">
            <h3 class="box-title">Cadastre-se</h3>
        </div>
        <div class="row">
          <form action="/cakephp/clientes/add" onsubmit="return validateCliente()" id="ClienteAddForm" method="post" accept-charset="utf-8">
              <div style="display:none;">
                  <input type="hidden" name="_method" value="POST">
              </div>
  
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <label for="ClienteNome">Nome</label>
                      </div>
                      <div class="col-md-10">
                          <input required title="Deve conter apenas letras" class="form-control" name="data[Cliente][nome]" maxlength="45" type="text" id="ClienteNome" pattern="[A-Za-z]+">
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="ClienteSobrenome">Sobrenome</label>
                </div>
                <div class="col-md-10">
                  <input required title="Deve conter apenas letras" class="form-control" name="data[Cliente][sobrenome]" maxlength="45" type="text" id="ClienteSobrenome" pattern="[A-Za-z]+">
                </div>
            </div>
          </div>
    </div>
    <hr>
		<div class="row">
        <div class="form-group">
          <div class="col-md-2">
            <label  for="ClienteDt_Nascimento">Data de Nascimento</label>
          </div>
                <div class="col-md-10">
                  <input required type="text"  name="data[Cliente][dt_Nascimento]" id="ClienteDt_Nascimento" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
          </div>
    </div>
    <hr>
    <div class="row">
          <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="cpf">Cpf</label>
                </div>
                <div class="col-md-10">
                  <input required title="Deve conter 11 digitos numéricos " class="form-control" name="data[Cliente][cpf]" maxlength="11" type="text" id="cpf" pattern="[0-9]{11}">
                </div>
            </div>
          </div>
    </div>
    <hr>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="ClienteUsername">Login</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Cliente][username]" maxlength="40" type="text" id="ClienteUsername"  pattern="[A-Za-z]+">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="ClientePassword">Senha</label>
                    </div>
                    <div class="col-md-10">
                      <input required title="A senha deve conter pelo menos um digito numerico, uma letra maiuscula, uma letra minuscula, um caracter especial e deve conter pelo menos oito caracteres" class="form-control" name="data[Cliente][password]" maxlength="40" type="text" id="ClientePassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).*$">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input email">
                    <div class="col-md-2">
                      <label for="ClienteEmail">Email</label>
                    </div>
                    <div class="col-md-10">
                      <input required title="Deve possuir o formato teste@teste.com" class="form-control" name="data[Cliente][email]" maxlength="45" type="email" id="ClienteEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="submit">
                  <input class="btn btn-success" type="submit" value="Efetuar cadastro">
                </div>
            </div>
    </div>
          </form>

      </div>
</div>

<?php
echo $this->Html->script('jquery.min.js');

	echo $this->Html->script('jquery.inputmask.js');
	echo $this->Html->script('jquery.inputmask.date.extensions.js');
	echo $this->Html->script('jquery.inputmask.extensions.js');
  echo $this->Flash->render(); 
  echo $this->fetch('content'); 
?>

	<script>
		/* global $*/

  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    $('[data-mask]').inputmask()

  })
  
  function validateCliente()
	  {
	    var text;
	    var special =/[!@#\$%\^&\*]/;
      var letter = /[a-zA-Z]/;
      var number = /[0-9]/;
      
      var nome = document.getElementById("ClienteNome").value;
      var sobrenome = document.getElementById("ClienteSobrenome").value;
      
  	  var cpf = document.getElementById("cpf").value;
      var pass = document.getElementById("ClientePassword").value;
      
       if( !isNaN(nome) || !isNaN(sobrenome) )
  	  {
  	    //document.getElementById("submitButton").disabled = true;
  	    text = "Nome e Sobrenome devem conter apenas letras";
  	    alert(text);
  	    return false;
  	  }
      
  	  if(isNaN(cpf) || cpf.length != 11 )
  	  {
  	    //document.getElementById("submitButton").disabled = true;
  	    text = "Numero do CPF deve conter 11 digitos numericos";
  	    alert(cpf);
  	    return false;
  	  }
  	  if(!letter.test(pass) && !number.test(pass) && !special.test(pass))
  	  {
  	    //document.getElementById("submitButton").disabled = true;
  	    text = "A senha deve conter pelo menos 1 digito numerico, uma letra maiuscula, uma letra minuscula, 1 caracter especial e deve conter pelo menos 8 caracteres";
  	    alert(text);
  	    return false;
  	  }
  	  else{
  	    //document.getElementById("submitButton").disabled = false;
  	    return true;

  	  }
	  }
	</script>
  </body>


</html>
