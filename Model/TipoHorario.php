<?php 
class TipoHorario extends AppModel {
    public $name = 'TipoHorario';
    public $useTable = 'tipoHorarios';
    public $primaryKey = 'tipo_horarios_id';

    
    //  public $validate = array(
    //     'cpf' => array(
    //         'rule' => 'alphaNumeric',
    //         'message'=> 'Apenas numeros'
    //     )
    // );
}
