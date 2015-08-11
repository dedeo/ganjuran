<?php
App::uses('AppController', 'Controller');
/**
 * Jadwals Controller
 *
 * @property Jadwal $Jadwal
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JadwalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components 	= array('Paginator', 'Session');
	public $tipeMisa	= array('harian'=>'Harian','mingguan'=>'Mingguan','bulanan'=>'Bulanan');
	public $namaHari	= array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
	public $bahasa		= array('Jawa','Indonesia');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Jadwal->recursive = 0;
		$this->set('jadwals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jadwal->exists($id)) {
			throw new NotFoundException(__('Invalid jadwal'));
		}
		$options = array('conditions' => array('Jadwal.' . $this->Jadwal->primaryKey => $id));
		$this->set('jadwal', $this->Jadwal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jadwal->create();
			if ($this->Jadwal->save($this->request->data)) {
				$this->Session->setFlash(__('The jadwal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jadwal could not be saved. Please, try again.'));
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
		if (!$this->Jadwal->exists($id)) {
			throw new NotFoundException(__('Invalid jadwal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jadwal->save($this->request->data)) {
				$this->Session->setFlash(__('The jadwal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jadwal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jadwal.' . $this->Jadwal->primaryKey => $id));
			$this->request->data = $this->Jadwal->find('first', $options);
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
		$this->Jadwal->id = $id;
		if (!$this->Jadwal->exists()) {
			throw new NotFoundException(__('Invalid jadwal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jadwal->delete()) {
			$this->Session->setFlash(__('The jadwal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jadwal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Jadwal->recursive = 0;
		
		//$this->set('jadwals', $this->Paginator->paginate());
		$misas = $this->Jadwal->find('all');

	//	debug($misas);
	//	die();
		foreach ($misas as $key => $value) {
			//$jadwals[$key] = 
			$jadwals[$value['Jadwal']['tipe']][] = $value['Jadwal'];
		}

		$this->set('jadwals', $jadwals);

		$this->set('tipeMisa',$this->tipeMisa);
		$this->set('namaHari', $this->namaHari);
		$this->set('bahasa', $this->bahasa);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Jadwal->exists($id)) {
			throw new NotFoundException(__('Invalid jadwal'));
		}
		$options = array('conditions' => array('Jadwal.' . $this->Jadwal->primaryKey => $id));
		$this->set('jadwal', $this->Jadwal->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Jadwal->create();
			debug($this->request->data);
			$data = $this->request->data['Jadwal'];
			$save = array(
					'nama' => $data['nama'],
					'tipe' => $this->tipeMisa[$data['tipe']],
					'hari' => implode(', ', $data['hari']),
					'jam' => $data['jam'],
					'bahasa' => $this->bahasa[$data['bahasa']]				
				);

			if ($this->Jadwal->save($save)) {
				$this->Session->setFlash(__('The jadwal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jadwal could not be saved. Please, try again.'));
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
	public function admin_ajaxedit($id){
		$this->layout = null;
		$options = array('conditions' => array('Jadwal.' . $this->Jadwal->primaryKey => $id));

		$this->set('tipeMisa',$this->tipeMisa);
		$this->set('namaHari', $this->namaHari);
		$this->set('bahasa', $this->bahasa);

		$this->request->data = $this->Jadwal->find('first', $options);
	}

	public function admin_edit($id = null) {

		$this->autoRender = false;

		if (!$this->Jadwal->exists($id)) {
			throw new NotFoundException(__('Invalid jadwal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Jadwal->save($this->request->data)) {
				$this->Session->setFlash(__('The jadwal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jadwal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jadwal.' . $this->Jadwal->primaryKey => $id));
			// $this->request->data = $this->Jadwal->find('first', $options);
			$this->set('data',$this->Jadwal->find('first', $options));
			$this->view('ajaxedit');
			//return json_encode($data);
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
		$this->Jadwal->id = $id;
		if (!$this->Jadwal->exists()) {
			throw new NotFoundException(__('Invalid jadwal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Jadwal->delete()) {
			$this->Session->setFlash(__('The jadwal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jadwal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
