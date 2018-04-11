<?php 
class Horario extends AppModel {
    public $name = 'Horario';
    public $useTable = 'horarios';

    
    public function getTipoHorarioDefault(){
        $sql = 'select * from alakazam.tipoHorarios where tipo_horarios_id = 1 or tipo_horarios_id = 2;';         
        $data = $this->query($sql);
        return $data;   
    }
    
    public function getTipoHorarios() {
     $sql = 'select * from alakazam.tipoHorarios where tipo_horarios_id IN (select distinct tipo_horarios_id from alakazam.horarios where psicologos_id=1 and tipo_horarios_id != 1 and tipo_horarios_id != 2 );';         
     $data = $this->query($sql); // MEXER AQUI QUANTO TIVER LOGIN
     return $data;
 }

    
    //  public $validate = array(
    //     'cpf' => array(
    //         'rule' => 'alphaNumeric',
    //         'message'=> 'Apenas numeros'
    //     )
    // );
}
