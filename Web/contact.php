<?php
	require_once("action/contactAction.php");
	
	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	CONTACTEZ-NOUS
</body>
<?php
		require_once("partial/footer.php");
