<?php
App::uses('AppController', 'Controller');
/**
 * Layouts Controller
 *
 * @property Layout $Layout
 */
class LayoutsController extends AppController {

public $components = array("RequestHandler");
public $helper = array("Text");
public $paginate = array('limit'=>8, 'order' => array('Layout.created' => 'desc'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Layout->recursive = 1;

		if($this->RequestHandler->isRss())
		{
			$layouts = $this->Layout->find("all", array('limit' => 20, 'order' => 'Layout.created DESC'));
			return $this->set("layouts", $layouts);
		}
		
		$this->set('layouts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Layout->exists($id)) {
			throw new NotFoundException(__('Invalid layout'));
		}
		$options = array('conditions' => array('Layout.' . $this->Layout->primaryKey => $id));
		$this->set('layout', $this->Layout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Layout->create();
			$this->request->data['Layout']['user_id'] = Authcomponent::user('id');
			if ($this->Layout->save($this->request->data)) {
				$this->Session->setFlash(__('The layout has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layout could not be saved. Please, try again.'));
			}
		}
		$users = $this->Layout->User->find('list');
		$categories = $this->Layout->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Layout->exists($id)) {
			throw new NotFoundException(__('Invalid layout'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Layout->save($this->request->data)) {
				$this->Session->setFlash(__('The layout has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Layout.' . $this->Layout->primaryKey => $id));
			$this->request->data = $this->Layout->find('first', $options);
		}
		$users = $this->Layout->User->find('list');
		$categories = $this->Layout->Category->find('list');
		$this->set(compact('users', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Layout->id = $id;
		if (!$this->Layout->exists()) {
			throw new NotFoundException(__('Invalid layout'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Layout->delete()) {
			$this->Session->setFlash(__('Layout deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Layout was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function beforeFilter($options = null)
	{
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	function search()
	{
		$titulo = '';


		if($this->request->is("post") && isset($this->request->data['Layout']["titulo"]))
		{
			$titulo = $this->request->data['Layout']["titulo"];
		}

		$options = array(
			'conditions'=> array('Layout.name LIKE' => '%' . $titulo . '%')
			);

		$this->paginate = $options;
		$layouts = $this->paginate();

		$this->set('layouts', $layouts);
		$this->render('index');
	}

	function xml()
	{
		
	}

}
