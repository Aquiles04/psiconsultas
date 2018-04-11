
<br>
<div class="col-md-6">
    <div class="box box-primary col-md-12">
        <div class="box-header with-border ">
            <h3 class="box-title">Editar cliente</h3>
        </div>
        <div class="row">
        <?php echo $this->Form->create('Cliente', array('url' => 'edit'));?>
         <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
               <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <label for="ClienteNome">Nome</label>
                      </div>
                      <div class="col-md-10">
                          <?php echo $this->Form->input('nome', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('sobrenome', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('dt_Nascimento', array('label' => false,'class'=>'form-control','type'=>'date' ));  ?>
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
                          <?php echo $this->Form->input('cpf', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('username', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('password', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('email', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="submit">
                  <input class="btn btn-success" type="submit" value="Salvar Alterações">
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
    
    
    
    