<?php
class AdminController extends AppController
	{
		var $name = 'admin';
		public $components = array( 'RequestHandler','Email','Auth','Session','Cookie');
		var $helpers = array('Html', 'Form','Paginator','Js','JqueryEngine','Session');
		var $uses = array ('User','Friend','Invite');
		function beforeFilter(){
			$this->Auth->allow();
		  }//end of func beforeFilte
		  
		 public function index(){
			  $this->layout = 'admin';
		   }
		
   
	}
?>