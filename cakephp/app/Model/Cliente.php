<?php 
class Cliente extends AppModel {
    public $name = 'Cliente';
    
    // public $hasMany = array(
    //     'Despesa' => array(
    //         'className' => 'Despesa',
    //         'foreignKey' => 'psicoterapeutas_id'
    //     )
    // );
    
     public $validate = array(
        'cpf' => array(
            'rule' => 'alphaNumeric',
            'message'=> 'Apenas numeros'
        )
    );
}
