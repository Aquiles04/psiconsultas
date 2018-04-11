<?php
class PlanosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Planos';
    
    
    public function index() {
        
        //debug($this->Plano->find('all'));die;
        $this->set('Planos', $this->Plano->find('all'));
    }
    
    public function view($id=null){
        $this->set('Planos', $this->Plano->findById($id));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            //debug($this->request->data);die;
            if ($this->Plano->save($this->request->data)) {
                $this->Flash->success('Plano salvo com sucesso.', array('class'=>'alert alert-success alert-dismissible'));
                $this->redirect(array('action' => 'index'));
            }else {
                $this->Session->setFlash('Error occured, Please try agan later!');
            }
        }
    }
    
    function edit($id = null) {
        $this->Plano->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Plano->findById($id);
        } else {
            if ($this->Plano->save($this->request->data)) {
                $this->Flash->success('Plano salvo com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Plano->delete($id)) {
            $this->Flash->success('Plano deletado');
            $this->redirect(array('action' => 'index'));
        }
    }
}