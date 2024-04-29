<?php
App::uses('AppController', 'Controller');
/**
 * Parkings Controller
 *
 * @property Parking $Parking
 * @property PaginatorComponent $Paginator
 */
class ParkingsController extends AppController {

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
						
						$listapartmentaut=$this->Parking->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $id),'fields' => array('Apartment.id','Apartment.id')));
						//debug($this->Parking->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $id),'fields' => array('Apartment.id','Apartment.id'))));
						$this->Paginator->settings = array('conditions' => array('Parking.apartment_id' => $listapartmentaut));
						$this->Parking->recursive = 0;
						$this->set('parkings', $this->Paginator->paginate());
						//debug($this->Parking->find('all',array('conditions' => array('Parking.apartment_id' => $listapartmentaut))));
						$this->set(compact('id'));							
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
		// traigo el parqueadero con el id para rastrear el conjunto
		$this->Parking->recursive =1;
		$parking=$this->Parking->find('first', array('conditions' => array('Parking.' . $this->Parking->primaryKey => $id)));
		//debug($parking);
		$complexidaut = array_search($parking['Apartment']['complex_id'], $complexesautlist);
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
						
						if (!$this->Parking->exists($id)) {
							throw new NotFoundException(__('Invalid parking'));
						}
						$this->set(compact('type','apartment','parking'));					
					}
			 }			 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {

		if ($this->request->is('post')) {
			$this->Parking->create();
			if ($this->Parking->save($this->request->data)) {
				$this->Flash->success(__('Parqueadero agregado'));
				return $this->redirect(array('action' => 'add'.'/'.$id));
			} else {
				$this->Flash->error(__('The parking could not be saved. Please, try again.'));
			}
		}
		
		$this->Parking->recursive = 0;
		$this->Paginator->settings = array('conditions' => array('Parking.apartment_id' => $id),'order' => array('Parking.id DESC'),'order' => 'Parking.id DESC');
		$this->set('parkings', $this->Paginator->paginate());
		$types = $this->Parking->Type->find('list');
		$this->loadModel('Apartment', 'RequestHandler');
		$this->Apartment->recursive = -1;	
		$options = array('conditions' => array('Apartment.' . $this->Apartment->primaryKey => $id));
		$apartment=$this->Apartment->find('first', $options);
		$this->set(compact('types','apartment'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Parking->exists($id)) {
			throw new NotFoundException(__('Invalid parking'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parking->save($this->request->data)) {
				$this->Flash->success(__('¡Parqueadero editado!'));
				return $this->redirect(array('action' => 'view/'.$id));
			} else {
				$this->Flash->error(__('The parking could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parking.' . $this->Parking->primaryKey => $id));
			$this->request->data = $this->Parking->find('first', $options);
		}
		$types = $this->Parking->Type->find('list');
		$this->set(compact('types'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Parking->exists($id)) {
			throw new NotFoundException(__('Invalid parking'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Parking->delete($id)) {
			$this->Flash->success(__('The parking has been deleted.'));
		} else {
			$this->Flash->error(__('The parking could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
		
}
