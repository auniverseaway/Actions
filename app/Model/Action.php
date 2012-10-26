<?php
class Action extends AppModel {
	public $belongsTo = 'Project';

    var $hasAndBelongsToMany = 'Tag';

	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'status' => array(
            'rule' => array('boolean'),
        )
    );
}
