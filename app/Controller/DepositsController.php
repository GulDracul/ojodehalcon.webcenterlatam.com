<?php
App::uses('AppController', 'Controller');
/**
 * Deposits Controller
 *
 * @property Deposit $Deposit
 * @property PaginatorComponent $Paginator
 */
class DepositsController extends AppController {

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
		public function index($id = null) {
			$this->loadModel('Usercomplexes', 'RequestHandler');
		$this->Usercomplexes->recursive = 0;
		//traigo los regístros de los usuarios autorizados para los conjuntos con su rol
		$usercomplexes=$this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id'))));	
		//traigo la lista de los conjuntos aurorizados para el ususario
		$complexesautlist=$this->Usercomplexes->find('list', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')),'fields' => array('Usercomplexes.complex_id')));
		$complexidaut = array_search($id, $complexesautlist);
		if($complexidaut==false){
		$this->Flash->error(__('No manipule las url, su usuario será bloqueado.'));	
		return $this->redirect(array('controller'=>'Users','action' => 'logout'));		
		}	
		//debug($complexesautlist);
		//debug($usercomplexes);
		
		//debug ($this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')))));		
		if (empty($usercomplexes)){
			$this->Flash->error(__('No tiene permisos para ingresar a este conjunto, si intenta volver a ingresar a este sitio su usuario será desactivado'));	
			return $this->redirect(array('controller'=>'Users','action' => 'logout'));	
		}else{
				$this->loadModel('Rolcontrollers', 'RequestHandler');
				$this->Rolcontrollers->recursive = 0;
				$rolcontroller = $this->Rolcontrollers->find('first', array('conditions' => array( 'Rolcontrollers.view' => $this->request->params['action'], "OR" => array('Rolcontrollers.controller' => ucfirst($this->request->params['controller']),'Rolcontrollers.controller' => $this->request->params['controller']))));				
				if (empty($rolcontroller) || $rolcontroller==null ){					
					$this->Flash->error(__('No tiene permisos para ingresar a este módulo, si intenta volver a ingresar a este sitio su usuario será desactivado'));	
					return $this->redirect(array('controller'=>'Users','action' => 'logout'));	
				}else{					
						$this->loadModel('Roles', 'RequestHandler');
						$this->Roles->recursive = 0;
						//debug ($this->Roles->find('all', array('conditions' => array( 'Roles.id' => $rolcontroller['Rolcontrollers']['role_id']))));
						
						$this->loadModel('Apartment', 'RequestHandler');
						$this->Paginator->settings = array('conditions' => array('Apartment.complex_id' => $id,'Apartment.deposit_id >' => 0 ),'order' => array('Apartment.deposit_id DESC'),'order' => 'Apartment.deposit_id DESC');
						$this->Apartment->recursive = 1;
						$this->set('apartments', $this->Paginator->paginate());					
					}
			 }		
			 
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Deposit->exists($id)) {
			throw new NotFoundException(__('Invalid deposit'));
		}
		$options = array('conditions' => array('Deposit.' . $this->Deposit->primaryKey => $id));
		$this->set('deposit', $this->Deposit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Deposit->create();
			if ($this->Deposit->save($this->request->data)) {
				$this->Flash->success(__('The deposit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deposit could not be saved. Please, try again.'));
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
		if (!$this->Deposit->exists($id)) {
			throw new NotFoundException(__('Invalid deposit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Deposit->save($this->request->data)) {
				$this->Flash->success(__('The deposit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deposit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Deposit.' . $this->Deposit->primaryKey => $id));
			$this->request->data = $this->Deposit->find('first', $options);
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
		if (!$this->Deposit->exists($id)) {
			throw new NotFoundException(__('Invalid deposit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Deposit->delete($id)) {
			$this->Flash->success(__('The deposit has been deleted.'));
		} else {
			$this->Flash->error(__('The deposit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
