<?php
App::uses('AppController', 'Controller');
/**
 * LayoutsCategories Controller
 *
 * @property LayoutsCategory $LayoutsCategory
 */
class LayoutsCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LayoutsCategory->recursive = 0;
		$this->set('layoutsCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LayoutsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid layouts category'));
		}
		$options = array('conditions' => array('LayoutsCategory.' . $this->LayoutsCategory->primaryKey => $id));
		$this->set('layoutsCategory', $this->LayoutsCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LayoutsCategory->create();
			if ($this->LayoutsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The layouts category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layouts category could not be saved. Please, try again.'));
			}
		}
		$layouts = $this->LayoutsCategory->Layout->find('list');
		$categories = $this->LayoutsCategory->Category->find('list');
		$this->set(compact('layouts', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LayoutsCategory->exists($id)) {
			throw new NotFoundException(__('Invalid layouts category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LayoutsCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The layouts category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The layouts category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LayoutsCategory.' . $this->LayoutsCategory->primaryKey => $id));
			$this->request->data = $this->LayoutsCategory->find('first', $options);
		}
		$layouts = $this->LayoutsCategory->Layout->find('list');
		$categories = $this->LayoutsCategory->Category->find('list');
		$this->set(compact('layouts', 'categories'));
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
		$this->LayoutsCategory->id = $id;
		if (!$this->LayoutsCategory->exists()) {
			throw new NotFoundException(__('Invalid layouts category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LayoutsCategory->delete()) {
			$this->Session->setFlash(__('Layouts category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Layouts category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
