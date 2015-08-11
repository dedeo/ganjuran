<?php
App::uses('AppController', 'Controller');
/**
 * Renungans Controller
 *
 * @property Renungan $Renungan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RenunganController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $helpers	= array('MyText');	
	public $status = array('draf'=>'Draf','pending'=>'Pending Review', 'publikasi'=>'Publikasi');

	public $uploadDir = "img/Renungan/";
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Renungan->recursive = 0;
		$this->set('renungans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Renungan->exists($id)) {
			throw new NotFoundException(__('Invalid renungan'));
		}
		$options = array('conditions' => array('Renungan.' . $this->Renungan->primaryKey => $id));
		$this->set('renungan', $this->Renungan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Renungan->create();
			if ($this->Renungan->save($this->request->data)) {
				$this->Session->setFlash(__('The renungan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renungan could not be saved. Please, try again.'));
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
		if (!$this->Renungan->exists($id)) {
			throw new NotFoundException(__('Invalid renungan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Renungan->save($this->request->data)) {
				$this->Session->setFlash(__('The renungan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renungan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Renungan.' . $this->Renungan->primaryKey => $id));
			$this->request->data = $this->Renungan->find('first', $options);
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
		$this->Renungan->id = $id;
		if (!$this->Renungan->exists()) {
			throw new NotFoundException(__('Invalid renungan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Renungan->delete()) {
			$this->Session->setFlash(__('The renungan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The renungan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Renungan->recursive = 0;
		$this->set('renungans', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Renungan->exists($id)) {
			throw new NotFoundException(__('Invalid renungan'));
		}
		$options = array('conditions' => array('Renungan.' . $this->Renungan->primaryKey => $id));
		$this->set('renungan', $this->Renungan->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Renungan->create();

			$dataForm = $this->request->data['Renungan'];

			//debug($dataForm);

			$filename = '';
			if(!empty($dataForm['gambar']['name'])){
				$file = $this->uploadFiles($this->uploadDir,$dataForm['gambar']);			

				if($file){
					$filename = $file['filename'];
				}
			}

			$data = array(
				'judul' 	=> $dataForm['judul'],
				'renungan' 	=> $dataForm['renungan'],
				'status'	=> $dataForm['status'],
				'gambar'	=> $filename,
				'penulis'	=> $dataForm['user_id'],
				'tgl_buat'	=> date("Y-m-d H:i:s")
			);

			//debug($data);
			//die();

			if ($this->Renungan->save($data)) {
				$this->Session->setFlash(__('<p class="text-success">Renungan baru berhasil disimpan.</p>'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<p class="text-danger">Renungan baru gagal disimpan, silahkan cek sekali lagi.</p>'));
			}
		}
		$this->set('status',$this->status);
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {

		if (!$this->Renungan->exists($id)) {
			throw new NotFoundException(__('Invalid renungan'));
		}
		$this->Renungan->id = $id;

		if ($this->request->is(array('post', 'put'))) {


	        $originalData = unserialize(base64_decode($this->request->data['Extra']['original_data']));
	        $save = $this->request->data;

	        // debug($originalData);
//	        debug($save);
	        unset($save['Extra']);
	        //die();

	        foreach ($save as $model => $modelFields) {
	            if (!array_key_exists($model, $originalData)) {
	        		//echo $model.' - not exist<br>';
	                continue;
	            }

	            foreach ($modelFields as $field => $value) {
	                if (!array_key_exists($field, $originalData[$model])) {
   		        		//echo $field.' - not exist<br>';
	                    continue;
	                }
					//echo $field.' - exist<br>';

	                if ($save[$model][$field] === $originalData[$model][$field]) {
	                	// echo 'data :'.$save[$model][$field].'<br>';
	                	// echo 'origin : '.$originalData[$model][$field].'<br>';
	                	// echo 'sama<br><br>';
	                    unset($save[$model][$field]);
	                }else{
	                	// echo 'data :'.$save[$model][$field].'<br>';
	                	// echo 'origin : '.$originalData[$model][$field].'<br>';
	                	// echo 'beda<br><br>';

	                }
	            }
	        }

	        if($save['Renungan']['updateGambar']['size']!=0){
	        	$img = $this->uploadFiles($this->uploadDir,$save['Renungan']['updateGambar']);
	        	if($img){
	        		$imgName = $img['filename'];
	        	}else{
		            $this->Session->setFlash(__('<p class="text-danger">Terjadi kesalahan pada upload gambar</p>'));
		            //$this->redirect(array('action'=>'edit', $id));
	        	}
	        }else{
	        	$imgName='';
	        }

	        $save['Renungan']['gambar'] = $imgName;
	        $this->Renungan->set($save);

	        //debug($save);
	        //die();

			if ($this->Renungan->save($save)) {
				$this->Session->setFlash(__('The renungan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The renungan could not be saved. Please, try again.'));
			}
		}

		$options = array('conditions' => array('Renungan.' . $this->Renungan->primaryKey => $id));
		$this->request->data = $this->Renungan->find('first', $options);
        $this->request->data['Extra']['original_data'] = base64_encode(serialize($this->request->data));
		$this->set('status', $this->status);

	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Renungan->id = $id;
		if (!$this->Renungan->exists()) {
			throw new NotFoundException(__('Invalid renungan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Renungan->delete()) {
			$this->Session->setFlash(__('The renungan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The renungan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
