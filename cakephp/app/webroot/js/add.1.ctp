<br>
<div class="col-md-6">
    <div class="box box-primary col-md-12">
        <div class="box-header with-border ">
            <h3 class="box-title">Criar despesa</h3>
        </div>
        <div class="row">
          <form action="/cakephp/despesas/add" id="DespesaAddForm" method="post" accept-charset="utf-8">
              <div style="display:none;">
                  <input type="hidden" name="_method" value="POST">
              </div>
  
              <div class="form-group">
                  <div class="input text">
                      <div class="col-md-2">
                          <label for="DespesaIsEntrada">Is Entrada</label>
                      </div>
                      <div class="col-md-10">
                          <input class="checkbox" type="checkbox" id="DespesaIsEntrada" name="data[Despesa][is_Entrada]" value="1"/>
                      </div>
                  </div>
              </div>
        </div>
		<hr>
		<div class="row">
        <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="DespesaDtVencimento">Data de Vencimento</label>
                </div>
                <div class="col-md-10">
                  <input required class="form-control" name="data[Despesa][dt_Vencimento]" maxlength="45" type="text" id="DespesaDtVencimento">
                </div>
            </div>
          </div>
    </div>
    <hr>
    <div class="row">
          <div class="form-group">
            <div class="input text">
                <div class="col-md-2">
                  <label for="DespesaIsPaga">Is Paga</label>
                </div>
                <div class="col-md-10">
                  <input class="icheckbox_minimal-blue checked" type="checkbox" id="DespesaIsPaga" name="data[Despesa][is_Paga]" value="1"/>
                </div>
            </div>
          </div>
    </div>
    
    
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="DespesaDescricao">Descricao</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Despesa][descricao]" maxlength="40" type="text" id="DespesaDescricao">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="DespesaTipoDespesa">Tipo Despesa</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Despesa][tipo_Despesa]" maxlength="40" type="text" id="DespesaTipoDespesa">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    
        <div class="row">
            <div class="form-group">
                <div class="input text">
                    <div class="col-md-2">
                      <label for="DespesaValor">Valor</label>
                    </div>
                    <div class="col-md-10">
                      <input required class="form-control" name="data[Despesa][valor]" maxlength="40" type="text" id="DespesaValor">
                    </div>
                </div>
            </div>
    </div>
    
    <hr>
    <div class="row">
            <div class="form-group">
                <div class="submit">
                  <input class="btn btn-success" type="submit" value="Criar despesa">
                </div>
            </div>
    </div>
          </form>

      </div>
</div>
