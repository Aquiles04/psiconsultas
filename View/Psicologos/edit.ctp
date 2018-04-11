
<br>
<div class="col-md-6">
    <div class="box box-primary col-md-12">
        <div class="box-header with-border ">
            <h3 class="box-title">Editar psicologo</h3>
        </div>
          <?php echo $this->Form->create('Psicologo');?>
         <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
        <div class="row">
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <label for="PsicologoNome">Nome</label>
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
                  <label for="PsicologoSobrenome">Sobrenome</label>
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
            <div class="input text">
                <div class="col-md-2">
                  <label for="PsicologoCrp">Crp</label>
                </div>
                <div class="col-md-10">
                          <?php echo $this->Form->input('crp', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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

                      <?php echo $this->Form->input('tipo_Psicologo', array('options' => array("Basico", "Premium", "Grupo", "Pesquisador"),'label'=>false,'class'=>'form-control'));?>
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
                          <?php echo $this->Form->input('login', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('senha', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
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
                          <?php echo $this->Form->input('email', array('label' => false,'class'=>'form-control','type'=>'numeric' ));  ?>
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="submit">
                  <input id="submitButton" class="btn btn-success" type="submit" value="Salvar Alterações" >
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