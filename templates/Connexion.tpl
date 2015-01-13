<div style="width:400px">
	<form method="POST" class="form-signin" action="req_connexion.php">
		  	
	  	<p class="lead text-center">Connexion</p>
	  	<div class="form-group">
	    	<input type="text" class="form-control" name="email" placeholder="Email" required>
	    	<input type="password" class="form-control" name="password" placeholder="Password" required>
	  	</div>

	  	<span class="text-center"><button type="submit" class="btn btn-lg btn-block btn-pcoste" id="buttonConnexion" name="valider">Se connecter</button></span>
	  	<a class='navbar-brand' href='index.php?page=Inscription.tpl'>Inscription</a>
	</form>
</div>


<div id="fb-root">
	<script type="text/javascript" src="js/APIFacebook.js"></script>
</div>
<div class="fb-login-button" data-max-rows="1" data-show-faces="true"></div>
