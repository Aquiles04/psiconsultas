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
          <form action="/cakephp/psicologos/add" onsubmit="return validatePsico()" id="PsicologoAddForm" method="post" accept-charset="utf-8">
              <div style="display:none;">
                  <input type="hidden" name="_method" value="POST">
              </div>
  
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <label for="PsicologoNome">Nome</label>
                      </div>
                      <div class="col-md-10">
                          <input required title="Deve conter apenas letras" class="form-control" name="data[Psicologo][nome]" maxlength="45" type="text" id="PsicologoNome" pattern="[A-Za-z]+" > 
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="PsicologoSobrenome">Sobrenome</label>
                </div>
                <div class="col-md-10">
                  <input required title="Deve conter apenas letras" class="form-control" name="data[Psicologo][sobrenome]" maxlength="45" type="text" id="PsicologoSobrenome" pattern="[A-Za-z]+">
                </div>
            </div>
          </div>
    </div>
    <hr>
    <div class="row">
          <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="PsicologoCrp">Crp</label>
                </div>
                <div class="col-md-10">
                  <input required title="Deve conter apenas numeros e ser composto de 5 digitos" class="form-control" name="data[Psicologo][crp]" maxlength="5" type="text" id="PsicologoCrp" pattern="[0-9]{5}">
                </div>
            </div>
          </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="PsicologoTipoPsicologo">Tipo Psicologo</label>
                    </div>
                    <div class="col-md-10">
                      <!-- 'empty' => '(escolha um)',-->
                      <?php echo $this->Form->input('Psicologo][tipo_Psicologo', array('options' => array("Basico", "Premium", "Grupo", "Pesquisador"),'label'=>false,'class'=>'form-control'));?>
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="PsicologoLogin">Login</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Psicologo][login]" maxlength="40" type="text" id="PsicologoLogin" pattern="[A-Za-z]+" >
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="PsicologoSenha">Senha</label>
                    </div>
                    
                    <div class="col-md-10" >
                      <input title="A senha deve conter pelo menos um digito numerico, uma letra maiuscula, uma letra minuscula, um caracter especial e deve conter pelo menos oito caracteres" required class="form-control" name="data[Psicologo][senha]" maxlength="40" type="text" id="PsicologoSenha" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).*$" >
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input email">
                    <div class="col-md-2">
                      <label for="PsicologoEmail">Email</label>
                    </div>
                    <div class="col-md-10">
                      <input required title="Deve possuir o formato teste@teste.com" class="form-control" name="data[Psicologo][email]" maxlength="45" type="email" id="PsicologoEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="submit">
                  <input id="submitButton" class="btn btn-success" type="submit" value="Efetuar cadastro" >
                </div>
            </div>
    </div>
          </form>

      </div>
</div>

	</body>
	
	<script type="text/javascript">
	/* global $*/
	
  function validatePsico()
	  {
	    var text;
	    var special =/[!@#\$%\^&\*]/;
      var letter = /[a-zA-Z]/;
      var number = /[0-9]/;
      
      var nome = document.getElementById("PsicologoNome").value;
      var sobrenome = document.getElementById("PsicologoSobrenome").value;
      
  	  var crp = document.getElementById("PsicologoCrp").value;
      var pass = document.getElementById("PsicologoSenha").value;
      
       if( !isNaN(nome) || !isNaN(sobrenome) )
  	  {
  	    //document.getElementById("submitButton").disabled = true;
  	    text = "Nome e Sobrenome devem conter apenas letras";
  	    alert(text);
  	    return false;
  	  }
      
  	  if(isNaN(crp) || crp < 0 || crp > 99999 )
  	  {
  	    //document.getElementById("submitButton").disabled = true;
  	    text = "Numero do CRP deve conter 5 digitos numericos";
  	    alert(text);
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
</html>