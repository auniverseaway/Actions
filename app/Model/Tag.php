<?php
class Tag extends AppModel {
    var $name = 'Tag';
    
    var $hasAndBelongsToMany = array(        
        'Action' => array(                
            'className'              => 'Action',                
            'joinTable'              => 'actions_tags',                
            'foreignKey'             => 'tag_id',                
            'associationForeignKey'  => 'action_id',            
            'unique'                 => true,       
            'conditions'             => '',
            'fields'                 => '',
            'order'                  => '',
            'limit'                  => '',
            'offset'                 => '',
            'finderQuery'            => '',
            'deleteQuery'            => '',
            'insertQuery'            => ''
            )    
    );

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );

}