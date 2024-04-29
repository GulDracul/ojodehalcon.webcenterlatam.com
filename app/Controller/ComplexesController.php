<?php
App::uses('AppController', 'Controller');
/**
 * Complexes Controller
 *
 * @property Complex $Complex
 * @property PaginatorComponent $Paginator
 */
class ComplexesController extends AppController {

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
		
		$this->loadModel('Usercomplexes', 'RequestHandler');
		$this->Usercomplexes->recursive = 0;
		//traigo los regístros de los usuarios autorizados para los conjuntos con su rol
		$usercomplexes=$this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id'))));	
		//traigo la lista de los conjuntos aurorizados para el ususario
		$complexesautlist=$this->Usercomplexes->find('list', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')),'fields' => array('Usercomplexes.complex_id','Usercomplexes.complex_id')));
		//debug($complexesautlist);
		//debug ($this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')))));		
		if (empty($usercomplexes)){
			$this->Flash->error(__('No tiene permisos para ingresar a este conjunto, si intenta volver a ingresar a este sitio su usuario será desactivado'));	
			return $this->redirect(array('controller'=>'Users','action' => 'logout'));	
		}else{
				$this->loadModel('Rolcontrollers', 'RequestHandler');
				$this->Rolcontrollers->recursive = 0;
				$rolcontroller = $this->Rolcontrollers->find('first', array('conditions' => array( 'Rolcontrollers.view' => $this->request->params['action'], "OR" => array('Rolcontrollers.controller' => ucfirst($this->request->params['controller']),'Rolcontrollers.controller' => $this->request->params['controller']))));
				//debug($this->Rolcontrollers->find('first', array('conditions' => array('Rolcontrollers.role_id' =>$usercomplexes['Usercomplexes']['role_id'], 'Rolcontrollers.view' => $this->request->params['action'], "OR" => array('Rolcontrollers.controller' => ucfirst($this->request->params['controller']),'Rolcontrollers.controller' => $this->request->params['controller'])))));
				
				if (empty($rolcontroller)){					
					$this->Flash->error(__('No tiene permisos para ingresar a este módulo, si intenta volver a ingresar a este sitio su usuario será desactivado'));	
					return $this->redirect(array('controller'=>'Users','action' => 'logout'));	
				}else{
					
						$this->loadModel('Roles', 'RequestHandler');
						$this->Roles->recursive = 0;
						//debug ($this->Roles->find('all', array('conditions' => array( 'Roles.id' => $rolcontroller['Rolcontrollers']['role_id']))));
						
						$this->Paginator->settings = array('conditions' => array('Complex.id' => $complexesautlist),'order' => array('Complex.id DESC'),'order' => 'Complex.id DESC');
						$this->Complex->recursive = 0;
						$this->set('complexes', $this->Paginator->paginate());
					
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
			if (!$this->Complex->exists($id)) {
							throw new NotFoundException(__('Invalid complex'));
						}
						$options = array('conditions' => array('Complex.' . $this->Complex->primaryKey => $id));
						$this->set('complex', $this->Complex->find('first', $options));				 		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Complex->create();
			if ($this->Complex->save($this->request->data)) {
				$this->Flash->success(__('The complex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The complex could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Complex->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Complex->exists($id)) {
			throw new NotFoundException(__('Invalid complex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Complex->save($this->request->data)) {
				$this->Flash->success(__('The complex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The complex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Complex.' . $this->Complex->primaryKey => $id));
			$this->request->data = $this->Complex->find('first', $options);
		}
		$companies = $this->Complex->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Complex->exists($id)) {
			throw new NotFoundException(__('Invalid complex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Complex->delete($id)) {
			$this->Flash->success(__('The complex has been deleted.'));
		} else {
			$this->Flash->error(__('The complex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
