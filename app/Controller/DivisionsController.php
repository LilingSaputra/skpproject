<?php

class DivisionsController extends AppController{
    
    public $uses = array('Division');
    
    function index(){
        $division = $this->Division->find('all');
        $this->set('division', $division);
    }
    public function add() {
	if (!empty($this->data)) {
            $this->Division->create();
            if ($this->Division->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
		$this->redirect(array('action' => 'index'));
	    }else {
		$this->Session->setFlash('Unable to add your post.');
	    }
	}
    }
    public function edit($id = null) {
        $this->Division->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Division->read();
        } else {
            if ($this->Division->save($this->request->data)) {
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
        if ($this->Division->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>
