<?php
/**
 * Berita Fixture
 */
class BeritaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'primary'),
		'judul' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'berita' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'penulis_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => false),
		'tgl_buat' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'tgl_ubah' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'page_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'judul' => 'Lorem ipsum dolor sit amet',
			'berita' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'penulis_id' => 1,
			'tgl_buat' => 1437919547,
			'tgl_ubah' => 1437919547,
			'page_id' => 1
		),
	);

}
