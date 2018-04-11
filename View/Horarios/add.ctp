 <!-- File: /app/View/horario/add.ctp -->
<br>
<div class="col-md-6">
  <div class="box box-primary col-md-12">
    <div class="box-header with-border ">
      <h3 class="box-title">Criar Plano</h3>
    </div>
    <?php
      echo $this->Form->create('Horario');
      ?>
    <hr>
		<div class="row">
      <div class="form-group">
        <div class="input text">
          <div class="col-md-2">
            <?php echo $this->Form->label('dtinico'); ?>
          </div>
          <div class="col-md-10">
            <?php echo $this->Form->input('dt_Inicio', array('label' => false,'class'=>'form-control' )); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
		<div class="row">
      <div class="form-group">
        <div class="input text">
          <div class="col-md-2">
            <?php echo $this->Form->label('dt termino'); ?>
          </div>
          <div class="col-md-10">
            <?php echo $this->Form->input('dt_Termino', array('label' => false,'class'=>'form-control')); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
		<div class="row">
      <div class="form-group">
        <div class="input text">
          <div class="col-md-2">
            <?php echo $this->Form->label('psicologos id'); ?>
          </div>
          <div class="col-md-10">
            <?php echo $this->Form->input('psicologos_id', array('label' => false,'class'=>'form-control','type'=>'numeric' )); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
		<div class="row">
      <div class="form-group">
        <div class="input text">
          <div class="col-md-2">
            <?php echo $this->Form->label('tipo horario'); ?>
          </div>
          <div class="col-md-10">
            <?php echo $this->Form->input('tipo_horarios_id', array('label' => false,'class'=>'form-control','type'=>'numeric' )); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
        
    <hr>
    <div class="row">
      <div class="form-group">
          <div class="submit">
            <input class="btn btn-success" type="submit" value="Criar plano">
          </div>
      </div>
    </div>
  </form>
  </div>
</div>
