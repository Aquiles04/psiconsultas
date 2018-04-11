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
            'required' => true,
            'message'=> 'Apenas numeros'
        ),
            'between' => array(
                'rule' => array('lengthBetween', 5, 15),
                'message' => 'Between 5 to 15 characters'
            )
    );
}
