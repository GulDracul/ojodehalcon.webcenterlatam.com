<?php
App::uses('AppController', 'Controller');
/**
 * Apartments Controller
 *
 * @property Apartment $Apartment
 * @property PaginatorComponent $Paginator
 */
class ApartmentsController extends AppController {

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
			//return $this->redirect(array('controller'=>'Users','action' => 'logout'));	
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
						
						$this->Paginator->settings = array('conditions' => array('Apartment.complex_id' => $id),'order' => array('Complex.id DESC'),'order' => 'Complex.id DESC');
						$this->Apartment->recursive = 1;
						$this->set('apartments', $this->Paginator->paginate());
						$this->loadModel('Type', 'RequestHandler');
						$this->Type->recursive = 0;
						$this->set('type',$this->Type->find('list'),array('fields' => array('Type.id','Type.name')));					
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
		$this->loadModel('Usercomplexes', 'RequestHandler');
		$this->Usercomplexes->recursive = 0;
		//traigo los regístros de los usuarios autorizados para los conjuntos con su rol
		$usercomplexes=$this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id'))));	
		//traigo la lista de los conjuntos aurorizados para el ususario
		$complexesautlist=$this->Usercomplexes->find('list', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')),'fields' => array('Usercomplexes.complex_id')));
		// traigo el apt con el id para rastrear el conjunto
		$apartment=$this->Apartment->find('first', array('conditions' => array('Apartment.' . $this->Apartment->primaryKey => $id)));
		$complexidaut = array_search($apartment['Apartment']['complex_id'], $complexesautlist);
		if($complexidaut==false){
		$this->Flash->error(__('No manipule las url o su usuario será bloqueado.'));	
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
						
						$this->Apartment->recursive = 1;
						if (!$this->Apartment->exists($id)) {
							throw new NotFoundException(__('Apartamento inválido'));
						}
						$this->loadModel('Type', 'RequestHandler');
						$this->Type->recursive = 0;
						$type=$this->Type->find('list',array('fields' => array('Type.id','Type.name')));
						$this->set(compact('type','apartment'));					
					}
			 }			 
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Apartment->create();
			if ($this->Apartment->save($this->request->data)) {
				$this->Flash->success(__('The apartment has been saved.'));				
				return $this->redirect(array('controller'=>'Parkings','action' => 'add'.'/'.$this->Apartment->getLastInsertId()));
			} else {
				$this->Flash->error(__('The apartment could not be saved. Please, try again.'));
			}
		}
		$complexes = $this->Apartment->Complex->find('list');
		$deposits = $this->Apartment->Deposit->find('list');
		$this->set(compact('complexes', 'deposits'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	//modelos
	$this->loadModel('Type', 'RequestHandler');
    $this->Type->recursive = 0;	
	
		if (!$this->Apartment->exists($id)) {
			throw new NotFoundException(__('Invalid apartment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Apartment->save($this->request->data)) {
				$this->Flash->success(__('The apartment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The apartment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Apartment.' . $this->Apartment->primaryKey => $id));
			$this->request->data = $this->Apartment->find('first', $options);
		}		
		
		$apartment=$this->Apartment->find('first',  array('conditions' => array('Apartment.' . $this->Apartment->primaryKey => $id)));
		$complexes = $this->Apartment->Complex->find('list');		
		$types=$this->Type->find('list',array('fields' => array('Type.id','Type.name')));	
		$deposits = $this->Apartment->Deposit->find('list',array('fields' => array('Deposit.id','Deposit.number')));
		$this->set(compact('complexes', 'parkings', 'deposits','type','types','apartment'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Apartment->exists($id)) {
			throw new NotFoundException(__('Invalid apartment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Apartment->delete($id)) {
			$this->Flash->success(__('The apartment has been deleted.'));
		} else {
			$this->Flash->error(__('The apartment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
