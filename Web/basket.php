<?php
	require_once("action/basketAction.php");
	
	$action = new BasketAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	LE BASKET
</body>
<?php
		require_once("partial/footer.php");
