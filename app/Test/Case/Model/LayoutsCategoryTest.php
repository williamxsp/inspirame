<?php
App::uses('LayoutsCategory', 'Model');

/**
 * LayoutsCategory Test Case
 *
 */
class LayoutsCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.layouts_category',
		'app.layout',
		'app.user',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LayoutsCategory = ClassRegistry::init('LayoutsCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LayoutsCategory);

		parent::tearDown();
	}

}
