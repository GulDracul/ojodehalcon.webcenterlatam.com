<?php
App::uses('AppController', 'Controller');
/**
 * Rounds Controller
 *
 * @property Round $Round
 * @property PaginatorComponent $Paginator
 */
class RoundsController extends AppController {

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
		$this->Round->recursive = 0;
		$this->set('rounds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Round->exists($id)) {
			throw new NotFoundException(__('Invalid round'));
		}
		$options = array('conditions' => array('Round.' . $this->Round->primaryKey => $id));
		$this->set('round', $this->Round->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Round->create();
			if ($this->Round->save($this->request->data)) {
				$this->Flash->success(__('The round has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The round could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Round->Company->find('list');
		$complexes = $this->Round->Complex->find('list');
		$users = $this->Round->User->find('list');
		$this->set(compact('companies', 'complexes', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Round->exists($id)) {
			throw new NotFoundException(__('Invalid round'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Round->save($this->request->data)) {
				$this->Flash->success(__('The round has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The round could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Round.' . $this->Round->primaryKey => $id));
			$this->request->data = $this->Round->find('first', $options);
		}
		$companies = $this->Round->Company->find('list');
		$complexes = $this->Round->Complex->find('list');
		$users = $this->Round->User->find('list');
		$this->set(compact('companies', 'complexes', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Round->exists($id)) {
			throw new NotFoundException(__('Invalid round'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Round->delete($id)) {
			$this->Flash->success(__('The round has been deleted.'));
		} else {
			$this->Flash->error(__('The round could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
