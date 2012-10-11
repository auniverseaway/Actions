<?php
class Action extends AppModel {
	public $belongsTo = array(
        'Project' => array(
            'className'    => 'Project',
            'dependent'    => true
        )
    );
	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'status' => array(
            'rule' => array('boolean'),
        )
    );
}