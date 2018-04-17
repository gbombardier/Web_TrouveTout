<?php
	require_once("action/myAccountAction.php");
	
	$action = new MyAccountAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	MON COMPTE PLEIN
</body>
<?php
		require_once("partial/footer.php");
