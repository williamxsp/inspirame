<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
public function index() {
	$this->User->recursive = 0;
	$this->set('users', $this->paginate());
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function view($id = null) {
	if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid user'));
	}
	$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
	$this->set('user', $this->User->find('first', $options));
}

/**
 * add method
 *
 * @return void
 */
public function add() {
	if ($this->request->is('post')) {
		$this->User->create();
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('The user has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
	}
}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function edit($id = null) {
	if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid user'));
	}
	if ($this->request->is('post') || $this->request->is('put')) {
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('The user has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
	} else {
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->request->data = $this->User->find('first', $options);
	}
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
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalid user'));
	}
	$this->request->onlyAllow('post', 'delete');
	if ($this->User->delete()) {
		$this->Session->setFlash(__('User deleted'));
		$this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('User was not deleted'));
	$this->redirect(array('action' => 'index'));
}

public function login()
{
	if($this->request->is("post"))
	{
		if($this->Auth->login())
		{
<<<<<<< HEAD

			$this->redirect($this->Auth->redirect());
=======
			if($this->Auth->login())
			{
				$this->redirect($this->Auth->redirect());
			}
			else
			{
				$this->Session->setFlash("Usuário inválido");
			}	
>>>>>>> 325b0a695fd8be4b91c1c0c4c27e86400ee9d3fc
		}
		else
		{
			$this->Session->setFlash("Usuário inválido");
		}	
	}

}

public function logout()
{
	$this->redirect($this->Auth->logout());
}


public function beforeFilter()
{
	$this->Auth->allow('add');
}

public function isAuthorized($user = null)
{
	if (parent::isAuthorized($user))
		return true;

<<<<<<< HEAD
	$action = $this->request->action;
	switch ($action) {
		case 'edit':
			return $user['id'] == $this->request->pass[0];
			break;

		case 'add':
			return false;
			break;
	}
}
=======
	public function logout()
	{	
		$this->redirect($this->Auth->logout());
	}

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('logout', 'login');
	}

	function isAuthorized($user)
	{
		$role = $user['role'];

		if($this->request->params['action'] == 'add' && $role != 'admin')
		{
			$this->Session->setFlash("Você tem que ser administrador para acessar esta página");
			return false;
		}

		return true;
	}

>>>>>>> 325b0a695fd8be4b91c1c0c4c27e86400ee9d3fc

}
