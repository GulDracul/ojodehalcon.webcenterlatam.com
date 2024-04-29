<?php
App::uses('AppController', 'Controller');
/**
 * Usercomplexes Controller
 *
 * @property Usercomplex $Usercomplex
 * @property PaginatorComponent $Paginator
 */
class UsercomplexesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usercomplex->recursive = 0;
		$this->set('usercomplexes', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usercomplex->exists($id)) {
			throw new NotFoundException(__('Invalid usercomplex'));
		}
		$options = array('conditions' => array('Usercomplex.' . $this->Usercomplex->primaryKey => $id));
		$this->set('usercomplex', $this->Usercomplex->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usercomplex->create();
			if ($this->Usercomplex->save($this->request->data)) {
				$this->Flash->success(__('The usercomplex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usercomplex could not be saved. Please, try again.'));
			}
		}
		$users = $this->Usercomplex->User->find('list');
		$complexes = $this->Usercomplex->Complex->find('list');
		$roles = $this->Usercomplex->Role->find('list');
		$this->set(compact('users', 'complexes', 'roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usercomplex->exists($id)) {
			throw new NotFoundException(__('Invalid usercomplex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usercomplex->save($this->request->data)) {
				$this->Flash->success(__('The usercomplex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usercomplex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usercomplex.' . $this->Usercomplex->primaryKey => $id));
			$this->request->data = $this->Usercomplex->find('first', $options);
		}
		$users = $this->Usercomplex->User->find('list');
		$complexes = $this->Usercomplex->Complex->find('list');
		$roles = $this->Usercomplex->Role->find('list');
		$this->set(compact('users', 'complexes', 'roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Usercomplex->exists($id)) {
			throw new NotFoundException(__('Invalid usercomplex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usercomplex->delete($id)) {
			$this->Flash->success(__('The usercomplex has been deleted.'));
		} else {
			$this->Flash->error(__('The usercomplex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
		public function redirection() {
		$rol=$this->Usercomplex->find('first', array('conditions' => array( 'Usercomplex.user_id' => AuthComponent::user('id'))));
		//debug($rol);
		//debug('https://'.$_SERVER["HTTP_HOST"].'/'.$rol['Role']['route']);
		if (empty($rol)){
			$this->Flash->error(__('No tiene permisos para ingresar, si intenta volver a ingresar a este sitio su usuario será desactivado'));	
			return $this->redirect(array('controller'=>'Users','action' => 'logout'));	
		}else{
				return $this->redirect('https://'.$_SERVER["HTTP_HOST"].'/'.$rol['Role']['route']);
			}
	}


}
