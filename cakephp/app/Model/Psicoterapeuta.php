<?php 
class Psicoterapeuta extends AppModel {
    public $name = 'Psicoterapeuta';
    
    public $hasMany = array(
        'Despesa' => array(
            'className' => 'Despesa',
            'foreignKey' => 'psicoterapeutas_id'
        )
    );
    
     public $validate = array(
        'crp' => array(
            'rule' => 'alphaNumeric',
            'message'=> 'Apenas numeros'
        )
    );
}
