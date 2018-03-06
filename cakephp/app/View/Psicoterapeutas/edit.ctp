
<br>
<div class="col-md-6">
    <div class="box box-primary col-md-12">
        <div class="box-header with-border ">
            <h3 class="box-title">Editar psicoterapeuta</h3>
        </div>
        <div class="row">
        <?php echo $this->Form->create('Psicoterapeuta', array('url' => 'edit'));?>
         <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <?php echo $this->Form->label('Nome');?>
                      </div>
                      <div class="col-md-10">
                          <?php echo $this->Form->input('nome',array('label'=>false,'class'=>'form-control','required'=>true,'type'=>'text'));?>
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		<div class="row">
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <?php echo $this->Form->label('Sobrenome');?>
                      </div>
                      <div class="col-md-10">
                          <?php echo $this->Form->input('sobrenome',array('label'=>false,'class'=>'form-control','required'=>true,'type'=>'text'));?>
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		
		<div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                        <?php echo $this->Form->label('Crp');?>
                    </div>
                    <div class="col-md-10">
                          <?php echo $this->Form->input('crp',array('label'=>false,'class'=>'form-control','required'=>true,'type'=>'text'));?>
                    </div>
                </div>
            </div>
      </div>
		<hr>

		<div class="row">
          <div class="form-group">
              <div class="input text">
                  <div class="col-md-2">
                      <?php echo $this->Form->label('Tipo de plano');?>
                  </div>
                  <div class="col-md-10">
                    <?php echo $this->Form->input('tipo_Psicologo',array('options' => array("Básico", "Premium","Grupo","Pesquisador"),'empty' => '(escolha um)','label'=>false,'class'=>'form-control','required'=>true));?>
                  </div>
              </div>
          </div>
    </div>
		<hr>
		
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                    <?php echo $this->Form->label('Usuário');?>
                </div>
                <div class="col-md-10">
                          <?php echo $this->Form->input('username',array('label'=>false,'class'=>'form-control','required'=>true,'type'=>'text'));?>
                </div>
            </div>
        </div>
    </div>
		<hr>
		
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                    <?php echo $this->Form->label('Senha');?>
                </div>
                <div class="col-md-10">
                    <?php echo $this->Form->input('password',array('label'=>false,'class'=>'form-control','required'=>true));?>
                </div>
            </div>
        </div>
    </div>
		<hr>
		
	<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                    <?php echo $this->Form->label('Email');?>
                </div>
                <div class="col-md-10">
                    <?php echo $this->Form->input('email',array('label'=>false,'class'=>'form-control','required'=>true));?>
                </div>
            </div>
        </div>
    </div>
	<hr>
		
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-10">
                    <?php echo $this->Form->end('Salvar psicoterapeuta');?>
                </div>
            </div>
        </div>
    </div>
		<hr>
		
<?php
    
    
    
    