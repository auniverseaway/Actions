<?php
class ProjectsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('projects', $this->Project->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Project->create();
            if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash('Your project has been saved.');
                $this->redirect(array('project' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your project.');
            }
        }
    }
}