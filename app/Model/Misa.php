<?php
App::uses('AppModel', 'Model');
/**
 * Misa Model
 *
 */
class Misa extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tipe';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'jam' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bahasa' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
