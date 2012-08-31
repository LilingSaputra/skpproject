<?php

class PeoplesController extends AppController{
    
    public $uses = 'People';
    
    function index(){
        $people = $this->People->find('all');
        $this->set('people', $people);
    }
    public function add() {
	$divisions = $this->People->Division->find('list');
	$this->set('divisions', $divisions);
        
	if (!empty($this->data)) {
            $this->People->create();
            if ($this->People->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
		$this->redirect(array('action' => 'index'));
	    }else {
		$this->Session->setFlash('Unable to add your post.');
	    }
	}
    }
    public function edit($id = null) {
        $this->People->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->People->read();
            $divisions = $this->People->Division->find('list');
            $this->set('divisions', $divisions);
        } else {
            if ($this->People->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->People->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>
