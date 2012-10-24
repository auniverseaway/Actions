<?php
class ActionsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function inbox() {
        $this->set('actions', $this->Action->find( 'all', array( 'conditions' => array("project_id" => null, "status" => "0"))));
    }

    public function view($id = null) {
    	$this->Action->contain(array('Tag'));
    	$this->Action->id = $id;
		$this->set('action', $this->Action->read());
    }

    public function add() {
    	$this->set('projects', $this->Action->Project->find('list')); 
    	if ($this->request->is('post')) {
        	$this->Action->create();

            if ($this->Action->save($this->request->data)) {
                $this->Session->setFlash('Your action has been saved.');
                $this->redirect(array('action' => 'inbox'));
            } else {
                $this->Session->setFlash('Unable to add your action.');
            }
        }
    }

    public function edit($id = null) {
	    $this->Action->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Action->read();
	        $projects = $this->Action->Project->find('list');
	        $this->set('tags', $this->Action->Tag->find('list'));
			$this->set(compact('projects'));
	    } else {
	        if ($this->Action->save($this->request->data)) {
	            $this->Session->setFlash('Your action has been updated.');
	            $this->redirect(array('action' => 'inbox'));
	        } else {
	            $this->Session->setFlash('Unable to update your action.');
	        }
	    }
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Action->delete($id)) {
	        $this->Session->setFlash('The Action with id ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'inbox'));
	    }
	}

	function complete($id) {
		if ($this->request->is('post')) {
			$this->request->data = $this->Action->read();
	        $this->Action->set('status', 1);
			$this->Action->save();
			$this->Session->setFlash('The Action with id ' . $title . ' has been deleted.');
	    	$this->redirect(array('action' => 'inbox'));
	    }
	    
	}


}