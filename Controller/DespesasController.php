<?php
class DespesasController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Despesas';
    
    
    public function index() {
        //debug($this->Despesa->find('all'));die;
        $this->set('Despesas', $this->Despesa->find('all',array('conditions'=>array('psicoterapeutas_id'=>1))));
    }
    
    public function view($id=null){
        $this->set('Despesa', $this->Despesa->findById($id));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Despesa']['dt_Criacao'] = date('Y-m-d h:m:s');
            $this->request->data['Despesa']['psicoterapeutas_id'] = 1;
            //debug($this->request->data);die;
            if ($this->Despesa->save($this->request->data)) {
                
                $this->Flash->success('Despesa salva com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function edit($id = null) {
        $this->Despesa->id = $id;
        if ($this->request->is('get')) {
            //debug($this->Despesa->findByIdDespesa($id));die;
            $this->request->data = $this->Despesa->findById($id);
        } else {
            //debug($this->request->data);die;
            if ($this->Despesa->save($this->request->data)) {
                $this->Flash->success('Despesa atualizada com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Despesa->delete($id)) {
        $this->Flash->success('Despesa de id: ' . $id . ' foi deletada.');
        $this->redirect(array('action' => 'index'));
    }
}
}