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
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your project.');
            }
        }
    }

    public function edit($id = null) {
        $this->Project->id = $id;
        if ($this->request->is('get')) {
			$project = $this->Project->read();
            $this->request->data = $project;

            $this->set('actions', $project['Action']);
        } else {
            if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash('Your project has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your project.');
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Project->delete($id)) {
            $this->Session->setFlash('The project with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
