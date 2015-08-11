<?php
App::uses('AppModel', 'Model');
/**
 * Berita Model
 *
 */
class Berita extends AppModel {
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'judul';

/**
 * Validation rules
 *
 * @var array
 */

	public $validate = array(
		'judul' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Judul berita tidak boleh kosong',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			// 'alphaNumeric' => array(
			// 	'rule' => array('alphaNumeric'),
			// 	'message' => 'Judul dapat berupa karakter huruf atau angka',
			// 	//'allowEmpty' => false,
			// 	//'required' => false,
			// 	//'last' => false, // Stop validation after this rule
			// 	//'on' => 'create', // Limit validation to 'create' or 'update' operations
			// ),
			'minLength' => array(
				'rule' => array('minLength', '8'),
				'message' => 'Judul minimal 8 karakter',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'berita' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Isi berita tidak boleh kosong',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
