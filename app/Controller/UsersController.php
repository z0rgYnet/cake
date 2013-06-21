<?php
App::uses('AppController','Controller');
class UsersController extends AppController{

	public function beforefilter(){
		parent::beforeFilter();
		$this->Auth->allow('register', 'login');
	}

	public function login(){
        if (!empty($this->request->data)) {
            if ($this->Auth->login()) {
                $this->Session->setFlash("Vous êtes maintenant connecté","flash", array('class' => 'success'));
            }else{
                $this->Session->setFlash("Identifiants incorrects","flash", array('class' => 'error'));
            }
        }
    }


	public function register(){
		if(!empty($this->request->data)) {

			$this->User->create($this->request->data);

			if ($this->User->validates()){
				$token =md5(time() . '-' . uniqid());
				$this->User->create(array(
				'username' => $this->request->data['User']['username'],
				'mail' => $this->request->data['User']['mail'],
				'password' => $this->Auth->password($this->request->data['User']['password']),
				'token' => $token
				));

			$this->User->save();

			App::uses('CakeEmail', 'Network/Email');
			$CakeEmail = new CakeEmail('default');
			$CakeEmail->to($this->request->data['User']['mail']);
			$CakeEmail->subject('Votre inscription sur R2i Consulting');
			$CakeEmail->viewVars($this->request->data['User'] + 
				array(
					'token'=>$token,
					'id'=>$this->User->id));
			$CakeEmail->emailFormat('text');
			$CakeEmail->template('register');
			$CakeEmail->send();

			$this->Session->setFlash('Merci de vous être inscrit');

			}
		}
	}
}