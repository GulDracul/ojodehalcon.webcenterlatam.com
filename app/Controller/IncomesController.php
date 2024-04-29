<?php
App::uses('AppController', 'Controller');
/**
 * Incomes Controller
 *
 * @property Income $Income
 * @property PaginatorComponent $Paginator
 */
class IncomesController extends AppController {

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
		$this->Income->recursive = 0;
		$this->set('incomes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		$options = array('conditions' => array('Income.' . $this->Income->primaryKey => $id));
		$this->set('income', $this->Income->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {
		if ($this->request->is('post')) {
			$this->Income->create();
			if ($this->Income->save($this->request->data)) {
				$this->Flash->success(__('The income has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The income could not be saved. Please, try again.'));
			}
		}
		if(isset($id)){
		
		}else{ 
				$id=""; 
			}		
		$visitors = $this->Income->Visitor->find('list');
		$complexes = $this->Income->Complex->find('list');
		$apartments = $this->Income->Apartment->find('list',array('fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
		$parkings = $this->Income->Parking->find('list',array('fields' => array('Parking.id','Parking.number','Parking.type')));
		$users = $this->Income->User->find('list');		
		$this->set(compact('visitors', 'complexes', 'apartments', 'parkings', 'users', 'id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Income->save($this->request->data)) {
				$this->Flash->success(__('The income has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The income could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Income.' . $this->Income->primaryKey => $id));
			$this->request->data = $this->Income->find('first', $options);
		}
		$visitors = $this->Income->Visitor->find('list');
		$complexes = $this->Income->Complex->find('list');
		$apartments = $this->Income->Apartment->find('list',array('fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
		$parkings = $this->Income->Parking->find('list',array('fields' => array('Parking.id','Parking.number','Parking.type')));
		$users = $this->Income->User->find('list');
		$this->set(compact('visitors', 'complexes', 'apartments', 'parkings', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Income->delete($id)) {
			$this->Flash->success(__('The income has been deleted.'));
		} else {
			$this->Flash->error(__('The income could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
