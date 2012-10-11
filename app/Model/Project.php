<?php
class Project extends AppModel {
	public $hasMany = array(
        'Action' => array(
            'foreignKey'    => 'project_id',
            // 'conditions'    => array('Comment.status' => '1'),
            // 'order'         => 'Comment.created DESC',
            // 'limit'         => '5',
            'dependent'     => true
        )
    );
	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );
}