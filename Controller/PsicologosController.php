<?php
class PsicologosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Psicologos';
    
    
    public function index() {
        $this->set('Psicologos', $this->Psicologo->find('all',array('recursive'=>-1)));
    }
    
    public function view($id=null){
        $this->set('Psicologos', $this->Psicologo->findById($id));
    }
    //"Post.created >" => date('Y-m-d', strtotime("-2 weeks"))
    public function validar($id=null){
        // debug($this->Psicologo->find('all',array('conditions'=>array('OR' => array(
        // array('Psicologo.dt_Validado < '=> date('Y-m-d',strtotime("-1 week"))),
        // array('Psicologo.dt_Validado'=> null))))));die;
        $this->Psicologo->id = $id;
        if($this->Psicologo->id != null){
            
            $this->request->data['Psicologo']['id'] = $id;
            $this->request->data['Psicologo']['dt_Validado'] = date('Y-m-d');
            //debug($this->request->data);die;
            if ($this->Psicologo->save($this->request->data)) {
                $this->Flash->success('Psicolo validado com sucesso',array('class'=>'xalaba'));
                $this->redirect(array('action' => 'validar'));
            }
        }else{
            $this->set('Psicologos',$this->Psicologo->find('all',array('conditions'=>array('OR' => array(
            array('Psicologo.dt_Validado < '=> date('Y-m-d',strtotime("-1 week"))),
            array('Psicologo.dt_Validado'=> null))))));
        }
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
            //debug($this->Psicologo->findById($id));die;
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