<?php
App::uses('AppController', 'Controller');
/**
 * Routes Controller
 *
 * @property Route $Route
 * @property PaginatorComponent $Paginator
 */
class RoutesController extends AppController {

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
						
						$this->Paginator->settings = array('conditions' => array('Route.complex_id' => $id),'order' => array('Route.id DESC'),'order' => 'Route.id DESC');
						$this->Route->recursive = 0;
						$this->set('routes', $this->Paginator->paginate());					
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
		if (!$this->Route->exists($id)) {
			throw new NotFoundException(__('Invalid route'));
		}
		$options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
		$this->set('route', $this->Route->find('first', $options));
	}
	
	public function viewer($id = null) {
		if (!$this->Route->exists($id)) {
			throw new NotFoundException(__('Invalid route'));
		}
		$options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
		$this->set('route', $this->Route->find('first', $options));
	
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id) {
		//if ($this->request->is('post')) {
				date_default_timezone_set('America/Bogota');
				$horaActual_seg =date("H")*3600;
				$minutosActual_seg=date("i")*60;
				$horaActual=$minutosActual_seg+$horaActual_seg;
				$time =date("H:i");
				$today =date('Y-m-d');
				//debug($today);
				$this->Route->Frequency->recursive = -1;
				$this->Route->recursive = 1;
				$frequency= $this->Route->Frequency->find('first',array('conditions' => array('Frequency.start <='=>$time,'Frequency.end >='=>$time)));
				if (!isset($frequency) || empty($frequency)){
					$this->Flash->error(__('No hay frecuencias activas, comuniquese con el supervisor'));	
				}else{
				$route = $this->Route->find('first',array('conditions' => array('Route.zone_id'=>$id,'Route.frequency_id'=>$frequency['Frequency']['id'],'Route.created >='=>$today)));							
				}			
				if (!empty($route)){
					$this->Flash->error(__('Ya se regístro esta zona en la ruta'));
				}else{					
					if (!empty($frequency)){						
						$hour = $this->Route->Hour->find('first',array('conditions' => array('Hour.zone_id'=>$id,'Hour.frequency_id'=>$frequency['Frequency']['id'])));
						//debug($frequency);
						//debug($route);
						//debug($hour);
						if (empty($hour)){						
						$this->Flash->error(__('La zona no tiene ruta asignada para este horario.'));
						}else{
							
								list($hora, $minuto, $segundos) = preg_split('/[:| ]/', $hour['Hour']['start']);
								$segundos_horaInicial=($hora*3600)+($minuto*60)+$segundos;
								$segundos_minutoAnadir=($hour['Hour']['margin']*60)/2;
								$piso=abs($segundos_horaInicial-$segundos_minutoAnadir);		
								$techo=$segundos_horaInicial+$segundos_minutoAnadir;
								$horaActual;  							
								if($horaActual>=$piso and $horaActual<=$techo){										
									$this->Flash->success(__('Regístro a tiempo'));
									$intime=0;
								}else{
										$this->Flash->error(__('El registro de la zona es a las '.$hour['Hour']['start']));
										$intime=1;							
									  }
									if($horaActual<$piso){
										$this->Flash->error(__('Falta '.(abs($horaActual-$piso)/60).' min para activar esta zona.'));
										$intime=1;	
									}else{	
									
									
									
									
									$hour = $this->Route->Hour->find('first',array('conditions' => array('Hour.frequency_id'=>$frequency['Frequency']['id'],'Hour.zone_id'=>$id)));
									$this->Route->Zone->recursive = -1;
									$zone = $this->Route->Zone->find('first',array('conditions' => array('Zone.id'=>$id)));
									$user = $this->Route->User->find('first',array('conditions' => array('User.id'=>1)));
									
			
		
		
											
											$this->request->data['Route']['zone_id']=$id;
											$this->request->data['Route']['frequency_id']=$frequency['Frequency']['id'];
											$this->request->data['Route']['frecuency']=$frequency['Frequency']['name'];
											$this->request->data['Route']['hour_id']=$hour['Hour']['id'];	  
											$this->request->data['Route']['intime']=$intime;
											$this->request->data['Route']['start']=$hour['Hour']['start'];
											$this->request->data['Route']['zone']=$zone['Zone']['name'];
											$this->request->data['Route']['user']=$user['User']['name']." ".$user['User']['last_name'];
											
										
											$this->Route->create();
											if ($this->Route->save($this->request->data)) {
												$this->Flash->success(__('Regístro guardado'));
												return $this->redirect(array('action' => 'viewer'.'/'.$this->Route->getLastInsertId()));
											} else {
												$this->Flash->error(__('The route could not be saved. Please, try again.'));
											}															
										}		
							}																			
					}else{
							$this->Flash->error(__('No hay rutas activas, comuniquese con el supervisor'));	
					}
					//$this->Flash->error(__('No hay rutas o zonas activas, comuniquese con el supervisor'));	
				}				
		
		
		//}
		$zones = $this->Route->Zone->find('list',array('fields' => array('Zone.id','Zone.name'),'conditions' => array('Zone.id'=>$id)));
		$users = $this->Route->User->find('list');
		$incidents = $this->Route->Incident->find('list');
		$complexes = $this->Route->Complex->find('list');
		$companies = $this->Route->Company->find('list');
		$frequencies = $this->Route->Frequency->find('list');
		$hours = $this->Route->Hour->find('list',array('fields' => array('Hour.id','Hour.start'),'conditions' => array('Hour.zone_id'=>$id)));
		$this->set(compact('zones', 'users', 'incidents', 'complexes', 'companies', 'frequencies','hours','id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 
	public function edit($id = null) {
		if (!$this->Route->exists($id)) {
			throw new NotFoundException(__('Invalid route'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Route->save($this->request->data)) {
				$this->Flash->success(__('The route has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The route could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
			$this->request->data = $this->Route->find('first', $options);
		}
		$zones = $this->Route->Zone->find('list');
		$users = $this->Route->User->find('list');
		$incidents = $this->Route->Incident->find('list');
		$complexes = $this->Route->Complex->find('list');
		$companies = $this->Route->Company->find('list');
		$frequencies = $this->Route->Frequency->find('list');
		$this->set(compact('zones', 'users', 'incidents', 'complexes', 'companies', 'frequencies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void

	public function delete($id = null) {
		if (!$this->Route->exists($id)) {
			throw new NotFoundException(__('Invalid route'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Route->delete($id)) {
			$this->Flash->success(__('The route has been deleted.'));
		} else {
			$this->Flash->error(__('The route could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
 */	
	public function scan() {

	}
}
