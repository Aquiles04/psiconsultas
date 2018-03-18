<?php
class PsicologosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Psicologos';
    
    
    public function index() {
        //debug($this->Psicoterapeuta->find('all'));die;
        $this->set('Psicologos', $this->Psicologo->find('all'));
    }
    
    public function view($id=null){
        $this->set('Psicologos', $this->Psicologo->findById($id));
    }
    
    public function add() {
        $this->layout = false; // aqui eu indico q n vou usar o layout-lte quando logado
        if ($this->request->is('post')) {
            $this->request->data['Psicologo']['dt_Cadastro'] = date('Y-m-d h:m:s');
            $this->request->data['Psicologo']['is_Crp_Ativo'] = 1;
            $this->request->data['Psicologo']['is_Deletado'] = 0;
            //debug($this->request->data);die;
            if ($this->Psicologo->save($this->request->data)) {
                
                $this->Flash->success('Psicologo salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function edit($id = null) {
        $this->Psicologo->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Psicologo->findById($id);
        } else {
            if ($this->Psicologo->save($this->request->data)) {
                $this->Flash->success('Psicolo salvo com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Psicologo->delete($id)) {
        $this->Flash->success('Psicologo deletado');
        $this->redirect(array('action' => 'index'));
    }
}
}