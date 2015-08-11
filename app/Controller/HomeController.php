<?php
class HomeController extends AppController {
	//public $uses = array('News');
	public $layout = 'home';
	public $uses	= array('Berita');


	public function index() {
		$this->Berita->recursive =1 ;

		$options = array(
				'limit' => 9,
				'conditions'=> array('Berita.status'=>'publikasi')
			);

		$this->set('beritas', $this->Berita->find('all', $options));
	}

}
