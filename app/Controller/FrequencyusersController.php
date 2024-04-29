<?php
App::uses('AppController', 'Controller');
/**
 * Frequencyusers Controller
 *
 * @property Frequencyuser $Frequencyuser
 * @property PaginatorComponent $Paginator
 */
class FrequencyusersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Frequencyuser->recursive = 0;
		$this->set('frequencyusers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Frequencyuser->recursive = 1;
		if (!$this->Frequencyuser->exists($id)) {
			throw new NotFoundException(__('Invalid frequencyuser'));
		}
		$options = array('conditions' => array('Frequencyuser.' . $this->Frequencyuser->primaryKey => $id));
		$this->set('frequencyuser', $this->Frequencyuser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Frequencyuser->create();
			if ($this->Frequencyuser->save($this->request->data)) {
				$this->Flash->success(__('Se relaciono la ruta con éxito'));
				return $this->redirect(array('action' => 'view'."/".$this->Frequencyuser->getLastInsertId()));
			} else {
				$this->Flash->error(__('The frequencyuser could not be saved. Please, try again.'));
			}
		}
		$frequencies = $this->Frequencyuser->Frequency->find('list');
		$users = $this->Frequencyuser->User->find('list');
		$this->set(compact('frequencies', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Frequencyuser->exists($id)) {
			throw new NotFoundException(__('No válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Frequencyuser->save($this->request->data)) {
				$this->Flash->success(__('Edición realizada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The frequencyuser could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Frequencyuser.' . $this->Frequencyuser->primaryKey => $id));
			$this->request->data = $this->Frequencyuser->find('first', $options);
		}
		$frequencies = $this->Frequencyuser->Frequency->find('list');
		$users = $this->Frequencyuser->User->find('list');
		$this->set(compact('frequencies', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Frequencyuser->exists($id)) {
			throw new NotFoundException(__('Invalid frequencyuser'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Frequencyuser->delete($id)) {
			$this->Flash->success(__('Regístro eliminado.'));
		} else {
			$this->Flash->error(__('The frequencyuser could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
