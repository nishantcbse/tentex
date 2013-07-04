<?php
class UsersController extends AppController
	{
		var $name = 'Users';
		public $components = array( 'RequestHandler','Email','Auth','Session','Cookie');
		var $helpers = array('Html', 'Form','Paginator','Js','JqueryEngine','Session');
		var $uses = array ('User','Friend','Invite');
		//public $opauth_data;  
		function beforeFilter(){
			
				$this->Auth->allow('index','mes','change','login','registration','logout','fb','twittercall','twitter','join');
				$this->Auth->fields = array(
				'email'   =>  'email',
				'username' => 'username',
				'password' => 'password'  );
				$this->set('authUser', $this->Auth->user());
		  }//end of func beforeFilte
		  
		  
		  function index(){
		  }
		  
		  function login(){
			  $this->layout='login';
		  }
		  
		  function logout(){
			$this->Session->destroy();
			$this->Auth->logout();

		  }
		
   
	}
	?>