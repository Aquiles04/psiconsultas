
<br>
<div class="col-md-6">
    <div class="box box-primary col-md-12">
        <div class="box-header with-border ">
            <h3 class="box-title">Criar despesa</h3>
        </div>
        <div class="row">
        <?php echo $this->Form->create('Despesa', array('url' => 'edit'));?>
         <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <?php echo $this->Form->label('Entrada de dinheiro?');?>
                      </div>
                      <div class="col-md-10">
                          <?php echo $this->Form->checkbox('is_Entrada');?>
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		<div class="row">
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <?php echo $this->Form->label('Data de vencimento');?>
                      </div>
                      <div class="col-md-10">
                          <?php echo $this->Form->input('dt_Vencimento',array('label'=>false,'class'=>'form-control','required'=>true,'type'=>'text'));?>
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		
		<div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                        <?php echo $this->Form->label('Esta Paga?');?>
                    </div>
                    <div class="col-md-10">
                        <?php echo $this->Form->checkbox('is_Paga');?>
                    </div>
                </div>
            </div>
      </div>
		<hr>

		<div class="row">
          <div class="form-group">
              <div class="input text">
                  <div class="col-md-2">
                      <?php echo $this->Form->label('Descrição');?>
                  </div>
                  <div class="col-md-10">
                      <?php echo $this->Form->input('descricao',array('label'=>false,'class'=>'form-control','required'=>true));?>
                  </div>
              </div>
          </div>
    </div>
		<hr>
		
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                    <?php echo $this->Form->label('Tipo Despesa');?>
                </div>
                <div class="col-md-10">
                    <?php echo $this->Form->input('tipo_Despesa',array('options' => array("Individual", "Grupo"),'empty' => '(escolha um)','label'=>false,'class'=>'form-control','required'=>true));?>
                </div>
            </div>
        </div>
    </div>
		<hr>
		
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                    <?php echo $this->Form->label('Valor');?>
                </div>
                <div class="col-md-10">
                    <?php echo $this->Form->input('valor',array('label'=>false,'class'=>'form-control','required'=>true));?>
                </div>
            </div>
        </div>
    </div>
		<hr>
		
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-10">
                    <?php echo $this->Form->end('Save Despesa');?>
                </div>
            </div>
        </div>
    </div>
		<hr>
		
<?php
    
    
    
    