<?php 
class Psicologo extends AppModel {
    public $name = 'Psicologo';
    
    // public $hasMany = array(
    //     'Despesa' => array(
    //         'className' => 'Despesa',
    //         'foreignKey' => 'psicologos_id'
    //     )
    // );
    
     public $validate = array(
        'crp' => array(
            'rule' => 'alphaNumeric',
            'message'=> 'Apenas numeros'
        )
    );
}
