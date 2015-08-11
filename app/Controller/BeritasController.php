<?php
App::uses('AppController', 'Controller');
/**
 * Beritas Controller
 *
 * @property Berita $Berita
 * @property PaginatorComponent $Paginator
 */
class BeritasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Berita->recursive = 0;
		$this->set('beritas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Berita->exists($id)) {
			throw new NotFoundException(__('Invalid berita'));
		}
		$options = array('conditions' => array('Berita.' . $this->Berita->primaryKey => $id));
		$this->set('berita', $this->Berita->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Berita->create();
			if ($this->Berita->save($this->request->data)) {
				$this->Session->setFlash(__('The berita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The berita could not be saved. Please, try again.'));
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
		if (!$this->Berita->exists($id)) {
			throw new NotFoundException(__('Invalid berita'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Berita->save($this->request->data)) {
				$this->Session->setFlash(__('The berita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The berita could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Berita.' . $this->Berita->primaryKey => $id));
			$this->request->data = $this->Berita->find('first', $options);
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
		$this->Berita->id = $id;
		if (!$this->Berita->exists()) {
			throw new NotFoundException(__('Invalid berita'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Berita->delete()) {
			$this->Session->setFlash(__('The berita has been deleted.'));
		} else {
			$this->Session->setFlash(__('The berita could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * dashboard_index method
 *
 * @return void
 */
	public function dashboard_index() {
		$this->Layouts = 'dashboard';
		$this->Berita->recursive = 0;
		$this->set('beritas', $this->Paginator->paginate());
	}

/**
 * dashboard_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function dashboard_view($id = null) {
		if (!$this->Berita->exists($id)) {
			throw new NotFoundException(__('Invalid berita'));
		}
		$options = array('conditions' => array('Berita.' . $this->Berita->primaryKey => $id));
		$this->set('berita', $this->Berita->find('first', $options));
	}

/**
 * dashboard_add method
 *
 * @return void
 */
	public function dashboard_add() {
		if ($this->request->is('post')) {
			$this->Berita->create();
			if ($this->Berita->save($this->request->data)) {
				$this->Session->setFlash(__('The berita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The berita could not be saved. Please, try again.'));
			}
		}
	}

/**
 * dashboard_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function dashboard_edit($id = null) {
		if (!$this->Berita->exists($id)) {
			throw new NotFoundException(__('Invalid berita'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Berita->save($this->request->data)) {
				$this->Session->setFlash(__('The berita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The berita could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Berita.' . $this->Berita->primaryKey => $id));
			$this->request->data = $this->Berita->find('first', $options);
		}
	}

/**
 * dashboard_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function dashboard_delete($id = null) {
		$this->Berita->id = $id;
		if (!$this->Berita->exists()) {
			throw new NotFoundException(__('Invalid berita'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Berita->delete()) {
			$this->Session->setFlash(__('The berita has been deleted.'));
		} else {
			$this->Session->setFlash(__('The berita could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
