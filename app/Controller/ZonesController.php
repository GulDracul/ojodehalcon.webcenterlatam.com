<?php
App::uses('AppController', 'Controller');
/**
 * Zones Controller
 *
 * @property Zone $Zone
 * @property PaginatorComponent $Paginator
 */
class ZonesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Html', 'Form', 'Time', 'Js','QrCode');
	public $components = array('Session', 'RequestHandler','Cookie','Paginator');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Zone->recursive = 0;
		$this->set('zones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
		$this->set('zone', $this->Zone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zone->create();
			if ($this->Zone->save($this->request->data)) {
				$this->Flash->success(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The zone could not be saved. Please, try again.'));
			}
		}
		$complexes = $this->Zone->Complex->find('list');
		$this->set(compact('complexes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zone->save($this->request->data)) {
				$this->Flash->success(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The zone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
			$this->request->data = $this->Zone->find('first', $options);
		}
		$complexes = $this->Zone->Complex->find('list');
		$this->set(compact('complexes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zone->delete($id)) {
			$this->Flash->success(__('The zone has been deleted.'));
		} else {
			$this->Flash->error(__('The zone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
