<?php
class ClientesController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Clientes';
    
    
    public function index() {
        //debug($this->Psicoterapeuta->find('all'));die;
        $this->set('Clientes', $this->Cliente->find('all'));
    }
    
    public function view($id=null){
        $this->set('Cliente', $this->Post->findById($id));
    }
    
    public function add() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->request->data['Cliente']['dt_Cadastro'] = date('Y-m-d h:m:s');
            $this->request->data['Cliente']['is_Deletado'] = 0;
            
            $this->request->data['Cliente']['dt_Nascimento'] = date('Y-m-d',strtotime(str_replace('/', '-', $this->request->data['Cliente']['dt_Nascimento'])));
            
            //debug($this->request->data);die;
            if ($this->Cliente->save($this->request->data)) {
                
                $this->Flash->success('Cliente salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function edit($id = null) {
        $this->Cliente->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Cliente->findById($id);
        } else {
            if ($this->Cliente->save($this->request->data)) {
                $this->Flash->success('Cliente salvo com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Cliente->delete($id)) {
        $this->Flash->success('Cliente foi deletado');
        $this->redirect(array('action' => 'index'));
    }
}
}