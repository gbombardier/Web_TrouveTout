<?php
	require_once("action/articleAction.php");
	
	$action = new ArticleAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	UN ARTICLE
</body>
<?php
		require_once("partial/footer.php");
