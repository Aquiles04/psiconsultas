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
          <form action="/cakephp/psicoterapeutas/add" id="PsicoterapeutaAddForm" method="post" accept-charset="utf-8">
              <div style="display:none;">
                  <input type="hidden" name="_method" value="POST">
              </div>
  
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <label for="PsicoterapeutaNome">Nome</label>
                      </div>
                      <div class="col-md-10">
                          <input required class="form-control" name="data[Psicoterapeuta][nome]" maxlength="45" type="text" id="PsicoterapeutaNome">
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="PsicoterapeutaSobrenome">Sobrenome</label>
                </div>
                <div class="col-md-10">
                  <input required class="form-control" name="data[Psicoterapeuta][sobrenome]" maxlength="45" type="text" id="PsicoterapeutaSobrenome">
                </div>
            </div>
          </div>
    </div>
    <hr>
    <div class="row">
          <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="PsicoterapeutaCrp">Crp</label>
                </div>
                <div class="col-md-10">
                  <input required class="form-control" name="data[Psicoterapeuta][crp]" maxlength="20" type="text" id="PsicoterapeutaCrp">
                </div>
            </div>
          </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="PsicoterapeutaTipoPsicologo">Tipo Psicologo</label>
                    </div>
                    <div class="col-md-10">
                      <?php echo $this->Form->input('Psicoterapeuta][tipo_Psicologo', array('options' => array("Basico", "Premium", "Grupo", "Pesquisador"),'empty' => '(escolha um)','label'=>false,'class'=>'form-control'));?>
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="PsicoterapeutaUsername">Login</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Psicoterapeuta][username]" maxlength="40" type="text" id="PsicoterapeutaUsername">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="PsicoterapeutaPassword">Senha</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Psicoterapeuta][password]" maxlength="40" type="text" id="PsicoterapeutaPassword">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input email">
                    <div class="col-md-2">
                      <label for="PsicoterapeutaEmail">Email</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Psicoterapeuta][email]" maxlength="45" type="email" id="PsicoterapeutaEmail">
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

	</body>
</html>