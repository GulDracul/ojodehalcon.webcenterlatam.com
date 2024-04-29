<?php
App::uses('AppController', 'Controller');
/**
 * Rolcontrollers Controller
 *
 * @property Rolcontroller $Rolcontroller
 * @property PaginatorComponent $Paginator
 */
class RolcontrollersController extends AppController {

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
		$this->Rolcontroller->recursive = 0;
		$this->set('rolcontrollers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rolcontroller->exists($id)) {
			throw new NotFoundException(__('Invalid rolcontroller'));
		}
		$options = array('conditions' => array('Rolcontroller.' . $this->Rolcontroller->primaryKey => $id));
		$this->set('rolcontroller', $this->Rolcontroller->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		if ($this->request->is('post')) {
			$this->request->data['Rolcontroller']['role_id']=$id;
			$this->Rolcontroller->create();
			if ($this->Rolcontroller->save($this->request->data)) {
				$this->Flash->success(__('rol guardadado'));
				return $this->redirect(array('action' => 'add'.'/'.$id));
			} else {
				$this->Flash->error(__('The rolcontroller could not be saved. Please, try again.'));
			}
		}
		$controllers = array (
			"Apartments"=>"Apartments",
			"Articles"=>"Articles",
			"Companies"=>"Companies",
			"complexes"=>"complexes",
			"Deposits"=>"Deposits",
			"Events"=>"Events",
			"Frequencies"=>"Frequencies",
			"Frequencyusers"=>"Frequencyusers",
			"Hours"=>"Hours",
			"Incidents"=>"Incidents",
			"Incomes"=>"Incomes",
			"Mailboxes"=>"Mailboxes",
			"Parkings"=>"Parkings",
			"Rolcontrollers"=>"Rolcontrollers",
			"Roles"=>"Roles",
			"Rounds"=>"Rounds",
			"Routes"=>"Routes",
			"Schedules"=>"Schedules",
			"Shifts"=>"Shifts",
			"Types"=>"Types",
			"Users"=>"Users",
			"Visitors"=>"Visitors",
			"Zones"=>"Zones"
		);
		
		$views = array (
			"add"=>"add",
			"view"=>"view",
			"index"=>"index"
		);
		$role = $this->Rolcontroller->Role->find('first',array('conditions' => array('Role.id' => $id)));
		$this->set(compact('role','views','controllers'));
		//debug($this->Rolcontroller->Role->find('first',array('conditions' => array('Role.id' => $id))));
		$this->Paginator->settings = array('conditions' => array('Rolcontroller.role_id' => $id),'order' => array('Rolcontroller.id DESC'),'order' => 'Rolcontroller.id DESC');
		$this->Rolcontroller->recursive = 0;
		$this->set('rolcontrollers', $this->Paginator->paginate());
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rolcontroller->exists($id)) {
			throw new NotFoundException(__('Invalid rolcontroller'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rolcontroller->save($this->request->data)) {
				$this->Flash->success(__('The rolcontroller has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rolcontroller could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rolcontroller.' . $this->Rolcontroller->primaryKey => $id));
			$this->request->data = $this->Rolcontroller->find('first', $options);
		}
		$roles = $this->Rolcontroller->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Rolcontroller->exists($id)) {
			throw new NotFoundException(__('Invalid rolcontroller'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rolcontroller->delete($id)) {
			$this->Flash->success(__('The rolcontroller has been deleted.'));
		} else {
			$this->Flash->error(__('The rolcontroller could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
