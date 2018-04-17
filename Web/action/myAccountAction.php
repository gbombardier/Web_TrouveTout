<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/Connection.php");
	require_once("action/DAO/ResponseDAO.php");

	class MyAccountAction extends CommonAction {
		public $wrongLogin = false;
		public $connection = [];
		public $errorMessage = "";
		public $resultat;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->wrongLogin = false;

			if($_SESSION['userCookie']){
				//Aller chercher les infos de l'user
				$this->resultat = "allo";
			}else{
				header("location:noAccount.php");
			}
			
			//Si l'usagé n'est pas connecté, rediriger vers noAccount
		}
	}
	

