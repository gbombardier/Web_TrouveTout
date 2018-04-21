<?php
	require_once("action/noAccountAction.php");
	
	$action = new NoAccountAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
	<div id="bodyNoAccount">
		<form id="loginNoAccount" action=""> 
			<div id="notConnected"> Vous n'etes pas connecté, veuillez vous connecter!</div>
			<div id="emailNoAccount">Courriel: 
				<input type="text" name="courriel">
			</div><br>
			<div id="pwdNoAccount">Mot de passe:  
				<input type="text" name="mdp">
			</div><br>
			<input type="submit" value="Se Connecter">	
		</form>

		<div id="createAccount">
			<div>  Pas de compte? Pas de problemes! Cliquez <a id="createAccountA" href="register.php">ici</a> pour vous enregistrer.</div>
		</div>
		<button id="backNoAccount" type="button">Retour au menu principal</button>
	</div>
</body>
<?php
		require_once("partial/footer.php");
