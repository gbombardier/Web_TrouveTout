<?php
	require_once("action/ajaxArticlesAction.php");

	$action = new AjaxArticlesAction();
	$action->execute();

	echo json_encode($action->result);