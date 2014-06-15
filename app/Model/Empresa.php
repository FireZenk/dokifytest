<?php
class Empresa extends AppModel {
	public $name = 'Empresa';

	public $hasMany = array('Providers'); 


	public $validate = array(
        'nombre' => array(
            'rule' => 'notEmpty'
        ),
        'sector' => array(
            'rule' => 'notEmpty'
        )
    );
}