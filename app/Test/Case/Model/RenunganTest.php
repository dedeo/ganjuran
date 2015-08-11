<?php
App::uses('Renungan', 'Model');

/**
 * Renungan Test Case
 */
class RenunganTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.renungan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Renungan = ClassRegistry::init('Renungan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Renungan);

		parent::tearDown();
	}

}
