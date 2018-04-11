<?php
class TipoHorariosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'TipoHorarios';
    public $useTable = 'tipoHorarios';
     public $primaryKey = 'tipo_horarios_id';

    
    public function index() {
    }
    
    public function add() {
        $this->autoRender = false;
        if($this->request->is('post')){
            //debug($this->request->data);die;
            if ($this->TipoHorario->save($this->request->data)) {
                echo $this->TipoHorario->getLastInsertId();
            }else {
                return "erro";
            }
        }
    }
    
    public function delete($id=null){
        $this->autoRender = false;
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        
        if ($this->TipoHorario->delete($id)) {
            return "OK";
        }else{
            return "erro";
        }
    }
    
    
}
