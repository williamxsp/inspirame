<?php
App::uses('Layout', 'Model');

/**
 * Layout Test Case
 *
 */
class LayoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.layout',
		'app.user',
		'app.category',
		'app.layouts_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Layout = ClassRegistry::init('Layout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Layout);

		parent::tearDown();
	}

}
