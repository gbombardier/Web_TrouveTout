<?php
	require_once("action/noAccountAction.php");
	
	$action = new NoAccountAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	MON COMPTE NON CRÉÉ
</body>
<?php
		require_once("partial/footer.php");
