<?php
App::uses('Berita', 'Model');

/**
 * Berita Test Case
 */
class BeritaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.berita'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Berita = ClassRegistry::init('Berita');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Berita);

		parent::tearDown();
	}

}
