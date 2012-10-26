<?php
class Project extends AppModel {
	var $hasMany = array(
		'Action' => array(
			'dependent' => true
		)
	);

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );

}
