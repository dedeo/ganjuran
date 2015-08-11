<?php
App::uses('AppController', 'Controller');
/**
 * Misas Controller
 *
 * @property Misa $Misa
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MisasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Misa->recursive = 0;
		$this->set('misas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Misa->exists($id)) {
			throw new NotFoundException(__('Invalid misa'));
		}
		$options = array('conditions' => array('Misa.' . $this->Misa->primaryKey => $id));
		$this->set('misa', $this->Misa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Misa->create();
			if ($this->Misa->save($this->request->data)) {
				$this->Session->setFlash(__('The misa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The misa could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Misa->exists($id)) {
			throw new NotFoundException(__('Invalid misa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Misa->save($this->request->data)) {
				$this->Session->setFlash(__('The misa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The misa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Misa.' . $this->Misa->primaryKey => $id));
			$this->request->data = $this->Misa->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Misa->id = $id;
		if (!$this->Misa->exists()) {
			throw new NotFoundException(__('Invalid misa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Misa->delete()) {
			$this->Session->setFlash(__('The misa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The misa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Misa->recursive = 0;
		$this->set('misas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Misa->exists($id)) {
			throw new NotFoundException(__('Invalid misa'));
		}
		$options = array('conditions' => array('Misa.' . $this->Misa->primaryKey => $id));
		$this->set('misa', $this->Misa->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Misa->create();
			if ($this->Misa->save($this->request->data)) {
				$this->Session->setFlash(__('The misa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The misa could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Misa->exists($id)) {
			throw new NotFoundException(__('Invalid misa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Misa->save($this->request->data)) {
				$this->Session->setFlash(__('The misa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The misa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Misa.' . $this->Misa->primaryKey => $id));
			$this->request->data = $this->Misa->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Misa->id = $id;
		if (!$this->Misa->exists()) {
			throw new NotFoundException(__('Invalid misa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Misa->delete()) {
			$this->Session->setFlash(__('The misa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The misa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
