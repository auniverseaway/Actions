<?php
class Tag extends AppModel {
    var $hasAndBelongsToMany = 'Action';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );

}
