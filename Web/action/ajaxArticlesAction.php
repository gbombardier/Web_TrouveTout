<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/ResponseDAO.php");

	class AjaxArticlesAction extends CommonAction {
		public $result;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$this->result = ResponseDAO::selectWhere('TAB_ARTICLE', 'ID_CAT', $_POST['id']);
		}
	}