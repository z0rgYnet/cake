<?php
class User extends AppModel{

	public $hasmany = array('Message');
	
	public $validate = array(
	'username' => array (
		'alpha' => array(
		'rule' => '/^[a-z0-9A-Z]*$/',
		'message' => 'Votre nom d\'utilisateur n\'est pas valide'),

		'unique' =>array(
			'rule' =>'isUnique',
			'message' => 'Ce nom d\'utilisateur est déjà pris')


	),
	'mail' => array(
		'email'=> array(
		'rule' => 'email'
		),
			'unique' =>array(
			'rule' =>'isUnique',
			'message' => 'Ce email est déjà utilisé')

	),


	'password' => array(
		'rule' => 'notEmpty'),
	'password2' => array(
		'rule' => 'identicalFields',
		'message' => 'Vos mots de passe ne sont pas identiques')
	);

	public function identicalFields($check,$limit){
		return $check['password2'] == $this->data['User']['password'];
	}
}