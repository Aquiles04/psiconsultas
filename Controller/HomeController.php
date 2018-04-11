<?php
class HomeController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Home';
    
    
    public function index() {
        $this->layout = false;
        $this->set('posts', []);
    }
    
    public function view($id=null){
    }
    
    public function add() {
        $this->layout = false;
        if ($this->request->is('post')) {
            $this->request->data['Psicologo']['dtCadastro'] = date('Y-m-d h:m:s');
            $this->request->data['Psicologo']['isCrpAtivo'] = 1;
            $this->request->data['Psicologo']['isDeletado'] = 0;
            //debug($this->request->data);die;
            if ($this->Psicologo->save($this->request->data)) {
                
                $this->Flash->success('Psicoterapeuta salvo com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
}
