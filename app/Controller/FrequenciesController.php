<?php
App::uses('AppController', 'Controller');
/**
 * Frequencies Controller
 *
 * @property Frequency $Frequency
 * @property PaginatorComponent $Paginator
 */
class FrequenciesController extends AppController {

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
		$this->Frequency->recursive =0;
		$this->set('frequencies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('Frequencyuser', 'RequestHandler');
        $this->Frequencyuser->recursive = 0;
		$this->loadModel('Zone', 'RequestHandler');
        $this->Zone->recursive = 0;
		$this->Frequency->recursive =1;
		if (!$this->Frequency->exists($id)) {
			throw new NotFoundException(__('Invalid frequency'));
		}
		$options = array('conditions' => array('Frequency.' . $this->Frequency->primaryKey => $id));
		$frequency=$this->Frequency->find('first', $options);
		$frequencyusers=$this->Frequencyuser->find('all', array('conditions' => array('Frequencyuser.frequency_id' => $frequency['Frequency']['id'])));
		$zones = $this->Zone->find('list',array('fields' => array('Zone.id','Zone.name')));
		//debug($zones);
		$this->set(compact(array('frequencyusers','frequency','zones')));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Frequency->create();
			if ($this->Frequency->save($this->request->data)) {
				$this->Flash->success(__('Ruta creada'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The frequency could not be saved. Please, try again.'));
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
		if (!$this->Frequency->exists($id)) {
			throw new NotFoundException(__('Invalid frequency'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Frequency->save($this->request->data)) {
				$this->Flash->success(__('Ruta editada'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The frequency could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Frequency.' . $this->Frequency->primaryKey => $id));
			$this->request->data = $this->Frequency->find('first', $options);
		}
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Frequency->exists($id)) {
			throw new NotFoundException(__('Invalid frequency'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Frequency->delete($id)) {
			$this->Flash->success(__('The frequency has been deleted.'));
		} else {
			$this->Flash->error(__('The frequency could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
