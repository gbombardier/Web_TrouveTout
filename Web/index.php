<?php
	require_once("action/indexAction.php");
	
	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	RECHERCHE

	<main id="index_contenu">
		<div id="index_categories">

		</div>
		<div id="index_articles">
			<input type="text" name = "index_search" id="index_search">
			<div id = "index_listeArticles">

			</div>
		</div>
	</main>
</body>
<?php
		require_once("partial/footer.php");
