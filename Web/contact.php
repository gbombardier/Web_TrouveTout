<?php
	require_once("action/contactAction.php");
	
	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	<div id="outsideSquare">
		<p>Votre opinion est importante pour nous! N'hésitez-pas a nouc écrire en entrant votre message dans l'espace ci-dessous et en cliquant sur envoyer!</p>
		<form  action="">
			<textarea id="comment" rows="30" cols="100" ></textarea><br>
			<input id="sendcomment" type="submit" value="Envoyer le message">
		</form>
	</div>
</body>
<?php
		require_once("partial/footer.php");
