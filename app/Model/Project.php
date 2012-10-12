<?php
class Project extends AppModel {
    var $name = 'Project';
    var $hasMany = array(
        'Action' => array(
            'className' => 'Action',
            'foreignKey' => 'project_id',
        )
    );

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );

}