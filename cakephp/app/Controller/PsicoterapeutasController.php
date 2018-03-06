<?php
class PsicoterapeutasController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Psicoterapeutas';
    
    
    public function index() {
        //debug($this->Psicoterapeuta->find('all'));die;
        $this->set('Psicoterapeutas', $this->Psicoterapeuta->find('all'));
    }
    
    public function view($id=null){
        $this->set('Psicoterapeuta', $this->Post->findById($id));
    }
    
    public function add() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->request->data['Psicoterapeuta']['dt_Cadastro'] = date('Y-m-d h:m:s');
            $this->request->data['Psicoterapeuta']['is_Crp_Ativo'] = 1;
            $this->request->data['Psicoterapeuta']['is_Deletado'] = 0;
            //debug($this->request->data);die;
            if ($this->Psicoterapeuta->save($this->request->data)) {
                
                $this->Flash->success('Psicoterapeuta salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function edit($id = null) {
        $this->Psicoterapeuta->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Psicoterapeuta->findById($id);
        } else {
            if ($this->Psicoterapeuta->save($this->request->data)) {
                $this->Flash->success('Psicoterapeuta salvo com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
    if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Post->delete($id)) {
        $this->Flash->success('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}