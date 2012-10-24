<?php
class TagsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
         $this->set('tags', $this->Tag->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Tag->create();
            if ($this->Tag->save($this->request->data)) {
                $this->Session->setFlash('Your tag has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your tag.');
            }
        }
    }

    public function edit($id = null) {
        $this->Tag->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Tag->read();
            

            $this->Tag->bindModel(array('hasOne' => array('ActionsTag')));
            $actions = $this->Tag->find('all', array('fields' => array('Tag.*'), 'conditions'=>array('ActionsTag.tag_id'=>$id)));
            $this->set(compact('actions'));
        } else {
            if ($this->Tag->save($this->request->data)) {
                $this->Session->setFlash('Your project has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your project.');
            }
        }
    }

}