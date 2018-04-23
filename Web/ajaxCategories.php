<?php
	require_once("action/ajaxCategoriesAction.php");

	$action = new AjaxCategoriesAction();
	$action->execute();

	echo json_encode($action->result);