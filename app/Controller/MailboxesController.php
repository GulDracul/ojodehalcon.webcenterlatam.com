<?php
App::uses('AppController', 'Controller');
/**
 * Mailboxes Controller
 *
 * @property Mailbox $Mailbox
 * @property PaginatorComponent $Paginator
 */
class MailboxesController extends AppController {

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
		$this->Mailbox->recursive = 0;
		$this->Paginator->settings = array('order' => array('Mailbox.id ASC','Mailbox.ouput ASC'),'order' => 'Mailbox.ouput ASC');
		$this->set('mailboxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mailbox->exists($id)) {
			throw new NotFoundException(__('Invalid mailbox'));
		}
		$options = array('conditions' => array('Mailbox.' . $this->Mailbox->primaryKey => $id));
		$this->set('mailbox', $this->Mailbox->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mailbox->create();
			if ($this->Mailbox->save($this->request->data)) {
				$this->Flash->success(__('The mailbox has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mailbox could not be saved. Please, try again.'));
			}
		}
		$articles = $this->Mailbox->Article->find('list');
		$apartments = $this->Mailbox->Apartment->find('list',array('fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
		$users = $this->Mailbox->User->find('list');
		$this->set(compact('articles', 'apartments', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mailbox->exists($id)) {
			throw new NotFoundException(__('Invalid mailbox'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mailbox->save($this->request->data)) {
				$this->Flash->success(__('The mailbox has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mailbox could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mailbox.' . $this->Mailbox->primaryKey => $id));
			$this->request->data = $this->Mailbox->find('first', $options);
		}
		$articles = $this->Mailbox->Article->find('list');
		$apartments = $this->Mailbox->Apartment->find('list',array('fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
		$users = $this->Mailbox->User->find('list');
		$this->set(compact('articles', 'apartments', 'users'));
	}
	public function delivered($id = null) {
			if (!$this->Mailbox->exists($id)) {
				throw new NotFoundException(__('Invalid mailbox'));
			}
			if ($this->request->is(array('post', 'put'))) {
				if ($this->Mailbox->save($this->request->data)) {
					$this->Flash->success(__('The mailbox has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('The mailbox could not be saved. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('Mailbox.' . $this->Mailbox->primaryKey => $id));
				$this->request->data = $this->Mailbox->find('first', $options);
			}
			$articles = $this->Mailbox->Article->find('list');
			$apartments = $this->Mailbox->Apartment->find('list',array('fields' => array('Apartment.id','Apartment.apt','Apartment.interior')));
			$users = $this->Mailbox->User->find('list');
			$this->set(compact('articles', 'apartments', 'users'));
		}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Mailbox->exists($id)) {
			throw new NotFoundException(__('Invalid mailbox'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mailbox->delete($id)) {
			$this->Flash->success(__('The mailbox has been deleted.'));
		} else {
			$this->Flash->error(__('The mailbox could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
