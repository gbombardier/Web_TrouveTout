<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/Connection.php");
	require_once("action/DAO/ResponseDAO.php");

	class RegisterAction extends CommonAction {
		public $wrongLogin = false;
		public $connection = [];
		public $errorMessage = "";
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->wrongLogin = false;
			
		}
	}
	
