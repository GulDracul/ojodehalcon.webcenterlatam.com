<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	  //Paso 3- Agregar los helpers y poner las funciones de autenticación
	var $helpers = array('Form', 'Time', 'Html', 'Session', 'Js');
	//Paso 4- cambiar los controladores y las acciones para que cuando se autentique vaya para alla 		  
	public $components = array(
        'Session','RequestHandler', 
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'Usercomplexes',
                'action' => 'redirection'
            ),
            'logoutRedirect' => array(
                'controller' => 'Users',
                'action' => 'Login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),'authorize' => array('Controller'),
            'authError' => "No tiene permisos para acceder a esta ubicación."
        )
    );
	


	//Paso 4- Colocar las vistas que no necesitan autenticación y cambiar el layout al que corresponda 		
    public function beforeFilter() {
		$this->layout = 'default';
        $this->Auth->allow('login','forgot_password','reset_password','reset_password_success','reset_password_token','add');
    }
	
	  public function isAuthorized($user)
    {
     //Paso 5- Verificar que el usuario esta activo, ir a UsersController   
		if($user['active']==1)
        {
            return true;
        }
        
        return false;
    }



}
