<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/ResponseDAO.php");

	class AjaxCategoriesAction extends CommonAction {
		public $result;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			//Va voir si une catégorie a été sélectionnée, sinon rien
			$this->result = ResponseDAO::selectAll('TAB_CATEGORIE');
		}
	}