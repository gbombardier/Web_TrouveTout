<?php
	require_once("action/registerAction.php");
	
	$action = new RegisterAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	je m'inscrit ici
</body>
<?php
		require_once("partial/footer.php");
