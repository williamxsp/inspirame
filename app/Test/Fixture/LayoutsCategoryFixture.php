<?php
/**
 * LayoutsCategoryFixture
 *
 */
class LayoutsCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'layout_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'layout_id' => 1,
			'category_id' => 1
		),
	);

}
