<?php
App::uses('AppController', 'Controller');
/**
 * Hours Controller
 *
 * @property Hour $Hour
 * @property PaginatorComponent $Paginator
 */
class HoursController extends AppController {

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
		$this->Hour->recursive = 0;
		$this->set('hours', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hour->exists($id)) {
			throw new NotFoundException(__('Invalid hour'));
		}
		$options = array('conditions' => array('Hour.' . $this->Hour->primaryKey => $id));
		$this->set('hour', $this->Hour->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hour->create();
			if ($this->Hour->save($this->request->data)) {
				$this->Flash->success(__('Se agrego la hora a la zona'));
				return $this->redirect(array('action' => 'view'."/".$this->Hour->getLastInsertId()));
			} else {
				$this->Flash->error(__('The hour could not be saved. Please, try again.'));
			}
		}
		$zones = $this->Hour->Zone->find('list');
		$frequencies = $this->Hour->Frequency->find('list');
		$this->set(compact('zones', 'frequencies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hour->exists($id)) {
			throw new NotFoundException(__('Invalid hour'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hour->save($this->request->data)) {
				$this->Flash->success(__('Edición realizada'));
				return $this->redirect(array('action' => 'view'."/".$id));
			} else {
				$this->Flash->error(__('The hour could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hour.' . $this->Hour->primaryKey => $id));
			$this->request->data = $this->Hour->find('first', $options);
		}
		$zones = $this->Hour->Zone->find('list');
		$frequencies = $this->Hour->Frequency->find('list');
		$this->set(compact('zones', 'frequencies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Hour->exists($id)) {
			throw new NotFoundException(__('Invalid hour'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hour->delete($id)) {
			$this->Flash->success(__('Eliminación de regístro realizada'));
		} else {
			$this->Flash->error(__('The hour could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
