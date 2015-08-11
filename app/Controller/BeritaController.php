<?php
App::uses('AppController', 'Controller');
/**
 * Beritas Controller
 *
 * @property Berita $Berita
 * @property PaginatorComponent $Paginator
 */
class BeritaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses	= array('Berita','User');
	public $helpers	= array('MyText','AjaxMultiUpload.Upload');
	public $status = array('draf'=>'Draf','pending'=>'Pending Review', 'publikasi'=>'Publikasi');

    public $paginate = array(
        'limit' => 15,
        'order' => array(
            'Berita.id' => 'asc'
        )
    );

    public $uploadDir = 'img/Berita/';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Berita->recursive = 2;
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
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Paginator->settings = $this->paginate;
		$this->Berita->recursive = 2;
		$this->set('beritas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Berita->exists($id)) {
			throw new NotFoundException(__('Invalid berita'));
		}
		$options = array('conditions' => array('Berita.' . $this->Berita->primaryKey => $id));
		$this->set('berita', $this->Berita->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Berita->create();

			$dataForm = $this->request->data['Berita'];

			//$tglSekarang = 

			$file = $this->uploadFiles($this->uploadDir,$dataForm['gambar']);

			if($file){
				$filename = $file['filename'];
	
				$data = array(
					'judul' 	=> $dataForm['judul'],
					'berita' 	=> $dataForm['berita'],
					'status'	=> $dataForm['status'],
					'gambar'	=> $filename,
					'user_id'	=> $dataForm['user_id'],
					'tgl_buat'	=> date("Y-m-d H:i:s")
				);
	
				if ($this->Berita->save($data)) {
					$this->Session->setFlash(__('Berita berhasil disimpan'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('<p class="text-danger">Berita tidak dapat disimpan, silahkan cek sekali lagi.</p>');
				}
			}else{
				$this->Session->setFlash('<p class="text-danger">File gambar tidak dapat disimpan</p>');
			}
		}

		$this->set('penulis', $this->User->find('list', array(
							'fields'=>array('User.id', 'User.nama')
						)	
					)
				);
		$this->set('status', $this->status);



	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {

		$this->Berita->id = $id;
	    if (!$this->Berita->exists()) {
	        throw new NotFoundException(__('Invalid user'));
	    }
	    if ($this->request->is('post') || $this->request->is('put')) {
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

	        if($save['Berita']['updateGambar']['size']!=0){
	        	$img = $this->uploadFiles($this->uploadDir,$save['Berita']['updateGambar']);
	        	if($img){
	        		$imgName = $img['filename'];
	        		$save['Berita']['gambar'] = $imgName;
	        	}else{
		            $this->Session->setFlash(__('<p class="text-danger">Terjadi kesalahan pada upload gambar</p>'));
		            //$this->redirect(array('action'=>'edit', $id));
	        	}
	        }

	        //debug($save);
	        //die();
	        $save['Berita']['tgl_ubah'] =  date("Y-m-d H:i:s");  
	        $this->Berita->set($save);

	        // if ($this->Berita->validates() && $this->Berita->save($save, false)) {
	        if ($this->Berita->save($save, false)) {
	            $this->Session->setFlash(__('<p class="text-success">Data berita berhasil disimpan</p>'));
	            // $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash(__('<p class="text-danger">Data berita tidak dapat disimpan, silahkan cek sekali lagi.</p>'));
	        }
	    }

        $this->request->data = $this->Berita->read(null, $id);
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
