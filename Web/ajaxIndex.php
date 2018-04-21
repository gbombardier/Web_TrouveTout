<?php
	require_once("action/ajaxIndexAction.php");

	$action = new AjaxIndexAction();
	$action->execute();

	echo json_encode($action->result);