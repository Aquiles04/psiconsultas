<?php
class HorariosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Horarios';
    
    
    public function index() {
         if ($this->request->is('get')){
            $tiposHorariosPsicologo = $this->Horario->getTipoHorarios();
            $tiposHorariosDefault   = $this->Horario->getTipoHorarioDefault();
            $aux = array_merge($tiposHorariosDefault,$tiposHorariosPsicologo);
            $this->set('TipoHorarios',$aux);
        }
    }
    
    public function view($id=null){
    }
    
    public function add() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            //debug($this->request->data);die;
            $this->Horario->id = $this->request->data['Horario']['id'];
            if ($this->Horario->save($this->request->data)) {
            }
        }
    }
    
    public function addCliente() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $this->Horario->id = $this->request->data['Horario']['id'];
            if ($this->Horario->save($this->request->data)) {
            }
        }
    }
    
    public function delete($id=null){
        $this->autoRender = false;
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        
        if ($this->Horario->delete($id)) {
            return "OK";
        }else{
            return "erro";
        }
    }
    
    public function cliente(){
        if ($this->request->is('get')){
            $this->loadModel('TipoHorario');
            $this->set('TipoHorarios',$this->TipoHorario->findBytipo_horarios_id('3'));
        }
    }
    
    public function feed(){
        //$this->layout = false;
        $this->autoRender = false;
        $this->Horario->dt_Inicio = $this->request->query('start');
        $this->Horario->dt_Termino = $this->request->query('end');
        
        $aux = $this->Horario->find('all',array('conditions'=>array('AND' => array(
            array('Horario.dt_Inicio >= '=> $this->request->query('start')),
            array('Horario.dt_Termino <= '=> $this->request->query('end'))
            ))));
        
        //debug($this->Horario->getTipoHorarioDefault());die;
        
        $newArr = array();
        foreach($aux as $horario) {
            
            $this->loadModel('TipoHorario');
            $tipoHorarios = $this->TipoHorario->findBytipo_horarios_id($horario['Horario']['tipo_horarios_id']);
            $horario['TipoHorario'] = $tipoHorarios['TipoHorario']; 
            $aux = $horario['TipoHorario']['titulo'];
            
            if($horario['Horario']['urgente'] == 1){
                $horario['TipoHorario']['titulo'] = $horario['TipoHorario']['titulo'] . " - urgente";
            }
        
           
            $arr[] = array(
                    "id" => $horario['Horario']['id'],
                    "psicologos_id" => $horario['Horario']['psicologos_id'],
                    "title" => $horario['TipoHorario']['titulo'], 
                    "start" => $horario['Horario']['dt_Inicio'],
                    "end" => $horario['Horario']['dt_Termino'],
                    "backgroundColor" => $horario['TipoHorario']['cor'],
                    "borderColor" => $horario['TipoHorario']['cor'],
                    "tipo_horarios_id" => $horario['Horario']['tipo_horarios_id'],
                    "eventOverlap" => true,
                    "urgente" => $horario['Horario']['urgente']
                );
        }
       return json_encode($arr);
        
    }
    
}
