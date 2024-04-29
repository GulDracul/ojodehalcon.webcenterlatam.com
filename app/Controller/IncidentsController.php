<?php
App::uses('AppController', 'Controller');
/**
 * Incidents Controller
 *
 * @property Incident $Incident
 * @property PaginatorComponent $Paginator
 */
class IncidentsController extends AppController {

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
						
						$this->Paginator->settings = array('conditions' => array('Incident.complex_id' => $id),'order' => array('Incident.id DESC'),'order' => 'Incident.id DESC');
						$this->Incident->recursive = 0;
						$this->set('incidents', $this->Paginator->paginate());		
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
		// traigo el incidente con el id para rastrear el conjunto			
		$incident=$this->Incident->find('first', array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id)));
		$complexidaut = array_search($incident['Incident']['complex_id'], $complexesautlist);
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
						
						if (!$this->Incident->exists($id)) {
							throw new NotFoundException(__('Invalid incident'));
						}
						 $this->Incident->recursive = 1;		
						$this->loadModel('Type', 'RequestHandler');
						$this->Type->recursive = 0;
						$this->set('type',$this->Type->find('list'),array('fields' => array('Type.id','Type.name')));
						$this->set(compact('id', 'incident'));		
						//debug($this->Incident->find('first', $options));			
					}
			 }			 
	}
	
	
	public function viewer($id = null) {
		
		$this->loadModel('Usercomplexes', 'RequestHandler');
		$this->Usercomplexes->recursive = 0;
		//traigo los regístros de los usuarios autorizados para los conjuntos con su rol
		$usercomplexes=$this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id'))));	
		//traigo la lista de los conjuntos aurorizados para el ususario
		$complexesautlist=$this->Usercomplexes->find('list', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')),'fields' => array('Usercomplexes.complex_id')));
		// traigo el incidente con el id para rastrear el conjunto			
		$incident=$this->Incident->find('first', array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id)));
		$complexidaut = array_search($incident['Incident']['complex_id'], $complexesautlist);
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
						if (!$this->Incident->exists($id)) {
							throw new NotFoundException(__('Invalid incident'));
						}
						 $this->Incident->recursive = 1;
						$options = array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id));
						$this->set('incident', $this->Incident->find('first', $options));
						$this->loadModel('Type', 'RequestHandler');
						$this->Type->recursive = 0;
						$this->set('type',$this->Type->find('list'),array('fields' => array('Type.id','Type.name')));
						//debug($this->Incident->find('first', $options));		
					}
			 }			 
	}
/**
 * add method
 *
 * @return void
 */
	public function add($id=null) {

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
						
								
						if ($this->request->is('post')) {
							$this->request->data['Incident']['user_id']=AuthComponent::user('id');
							$this->request->data['Incident']['complex_id']=$id;
							$this->Incident->create();
							if ($this->Incident->save($this->request->data)) {
								$this->Flash->success(__('Incidente creado.'));
								return $this->redirect(array('action' => 'view'."/".$this->Incident->getLastInsertId()));
							} else {
								$this->Flash->error(__('The incident could not be saved. Please, try again.'));
							}
						} 	
						//debug($this->Incident->find('all'));
						$apartments = $this->Incident->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $id),'fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
						$apartmentsaut = $this->Incident->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $id),'fields' => array('Apartment.id','Apartment.id')));
						$parkings = $this->Incident->Parking->find('list',array('conditions' => array('Parking.apartment_id' => $apartmentsaut),'fields' => array('Parking.id','Parking.number','Parking.type')));					
						$depositsaut = $this->Incident->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $id,'Apartment.deposit_id >' => 0),'fields' => array('Apartment.deposit_id','Apartment.deposit_id')));
						$deposits = $this->Incident->Deposit->find('list',array('conditions' => array('Deposit.id' => $depositsaut),'fields' => array('Deposit.id','Deposit.number')));
						$zones = $this->Incident->Zone->find('list',array('conditions' => array('Zone.complex_id' => $id),'fields' => array('Zone.id','Zone.name')));
						$events = $this->Incident->Event->find('list');
						if(isset($_GET["zone"])){
						$zone = $this->Incident->Zone->find('first',array('conditions' => array('Zone.id'=> $_GET["zone"])));	
						}else{ 
								$zone=""; 
							}
						
						//debug($zone);	
						$this->set(compact('parkings', 'apartments', 'deposits','zones','events','zone'));					
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
		
		$this->loadModel('Usercomplexes', 'RequestHandler');
		$this->Usercomplexes->recursive = 0;
		//traigo los regístros de los usuarios autorizados para los conjuntos con su rol
		$usercomplexes=$this->Usercomplexes->find('first', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id'))));	
		//traigo la lista de los conjuntos aurorizados para el ususario
		$complexesautlist=$this->Usercomplexes->find('list', array('conditions' => array( 'Usercomplexes.user_id' => AuthComponent::user('id')),'fields' => array('Usercomplexes.complex_id')));
		// traigo el incidente con el id para rastrear el conjunto			
		$incident=$this->Incident->find('first', array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id)));
		$complexidaut = array_search($incident['Incident']['complex_id'], $complexesautlist);
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
						if (!$this->Incident->exists($id)) {
							throw new NotFoundException(__('Invalid incident'));
						}
						if ($this->request->is(array('post', 'put'))) {
							if ($this->Incident->save($this->request->data)) {
								$this->Flash->success(__('Incidente editado'));
								return $this->redirect(array('action' => 'view'."/".$id));
							} else {
								$this->Flash->error(__('The incident could not be saved. Please, try again.'));
							}
						} else {
							$options = array('conditions' => array('Incident.' . $this->Incident->primaryKey => $id));
							$this->request->data = $this->Incident->find('first', $options);
						}
						$apartments = $this->Incident->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $incident['Incident']['complex_id']),'fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
						$apartmentsaut = $this->Incident->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $incident['Incident']['complex_id']),'fields' => array('Apartment.id','Apartment.id')));
						$parkings = $this->Incident->Parking->find('list',array('conditions' => array('Parking.apartment_id' => $apartmentsaut),'fields' => array('Parking.id','Parking.number','Parking.type')));					
						$depositsaut = $this->Incident->Apartment->find('list',array('conditions' => array('Apartment.complex_id' => $incident['Incident']['complex_id'],'Apartment.deposit_id >' => 0),'fields' => array('Apartment.deposit_id','Apartment.deposit_id')));
						$deposits = $this->Incident->Deposit->find('list',array('conditions' => array('Deposit.id' => $depositsaut),'fields' => array('Deposit.id','Deposit.number')));
						$zones = $this->Incident->Zone->find('list',array('conditions' => array('Zone.complex_id' => $incident['Incident']['complex_id']),'fields' => array('Zone.id','Zone.name')));
						$events = $this->Incident->Event->find('list');
						$this->set(compact('parkings', 'apartments','deposits','zones','events'));	
					}
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
		if (!$this->Incident->exists($id)) {
			throw new NotFoundException(__('Invalid incident'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Incident->delete($id)) {
			$this->Flash->success(__('The incident has been deleted.'));
		} else {
			$this->Flash->error(__('The incident could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
