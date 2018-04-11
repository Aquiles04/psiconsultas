 <!-- File: /app/View/Planos/edit.ctp -->
<br>
<div class="col-md-6">
  <div class="box box-primary col-md-12">
    <div class="box-header with-border ">
      <h3 class="box-title">Criar Plano</h3>
    </div>
    <?php
      echo $this->Form->create('Plano');
      ?>
    <hr>
		<div class="row">
      <div class="form-group">
        <div class="input text">
          <div class="col-md-2">
            <?php echo $this->Form->label('Plano'); ?>
          </div>
          <div class="col-md-10">
            <?php echo $this->Form->input('nome', array('label' => false,'class'=>'form-control' )); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
		<div class="row">
      <div class="form-group">
        <div class="input text">
          <div class="col-md-2">
            <?php echo $this->Form->label('Valor'); ?>
          </div>
          <div class="col-md-10">
            <?php echo $this->Form->input('valor', array('label' => false,'class'=>'form-control','type'=>'numeric' )); ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
        
    <hr>
    <div class="row">
      <div class="form-group">
          <div class="submit">
            <input class="btn btn-success" type="submit" value="Atualizar plano">
          </div>
      </div>
    </div>
  </form>
  </div>
</div>
