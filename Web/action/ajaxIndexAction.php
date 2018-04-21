<?php
	require_once("action/CommonAction.php");

	class AjaxIndexAction extends CommonAction {
		public $result;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			//Va voir si une catégorie a été sélectionnée, sinon rien
			if(isset($_GET['catName'])){
				$this->result = $_GET['catName'];
			}else{
				$this->result = "vide";
			}
		}
	}