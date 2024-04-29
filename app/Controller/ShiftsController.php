<?php
App::uses('AppController', 'Controller');
/**
 * Shifts Controller
 *
 * @property Shift $Shift
 * @property PaginatorComponent $Paginator
 */
class ShiftsController extends AppController {

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
		$this->Shift->recursive = 0;
		$this->set('shifts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shift->exists($id)) {
			throw new NotFoundException(__('Invalid shift'));
		}
		$options = array('conditions' => array('Shift.' . $this->Shift->primaryKey => $id));
		$this->set('shift', $this->Shift->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shift->create();
			if ($this->Shift->save($this->request->data)) {
				$this->Flash->success(__('The shift has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shift could not be saved. Please, try again.'));
			}
		}
		$schedules = $this->Shift->Schedule->find('list');
		$complexes = $this->Shift->Complex->find('list');
		$companies = $this->Shift->Company->find('list');
		$users = $this->Shift->User->find('list');
		$this->set(compact('schedules', 'complexes', 'companies', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shift->exists($id)) {
			throw new NotFoundException(__('Invalid shift'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shift->save($this->request->data)) {
				$this->Flash->success(__('The shift has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shift could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shift.' . $this->Shift->primaryKey => $id));
			$this->request->data = $this->Shift->find('first', $options);
		}
		$schedules = $this->Shift->Schedule->find('list');
		$complexes = $this->Shift->Complex->find('list');
		$companies = $this->Shift->Company->find('list');
		$users = $this->Shift->User->find('list');
		$this->set(compact('schedules', 'complexes', 'companies', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Shift->exists($id)) {
			throw new NotFoundException(__('Invalid shift'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shift->delete($id)) {
			$this->Flash->success(__('The shift has been deleted.'));
		} else {
			$this->Flash->error(__('The shift could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
