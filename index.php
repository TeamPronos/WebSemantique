<?php
    // Démarrage de la session utilisateur
    session_start();
    $session_login = (isset($_GET['email'])) ? htmlentities($_GET['email']) : NULL;
    if ( $session_login ) {
        $_SESSION['email'] = $session_login;
    }
    $page = (isset($_GET['page'])) ? htmlentities($_GET['page']) : NULL;
?>

<!DOCTYPE html>  
<html>  
<head>  
    <meta charset=utf-8 />  
    <title>Pictionnary - Inscription</title>
    <link href="bootstrap-3.3.1/css/bootstrap.css" rel="stylesheet">       
</head>  
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
				 <a class="navbar-brand" href="index.php?page=Accueil.tpl"><img id="logo-navbar">Accueil</a>
				 <a class="navbar-brand" href="index.php?page=Connexion.tpl"><img id="logo-navbar">Connexion</a>
				 <a class="navbar-brand" href="index.php?page=Inscription.tpl"><img id="logo-navbar">Inscription</a>
				 <?php if ( isset($_SESSION['email']) ) {
                        echo "<a class='navbar-brand'>Accueil</a>";
                    }
                 ?>
			</div>
		</div>
	</div>

    <div style="margin-top:60px; margin-left:20px; margin-bottom:30px;" class="row">
        <div class="col-sm-6 col-sm-offset-3">
        	<?php
                if ( $page ) {
                    if ( isset($_SESSION['email']) ) {
                        include('templates/' . $page);
                    }
                    else {
                        if ( $page == "Accueil.tpl" || $page == "Inscription.tpl" ) {
                            include('templates/' . $page);
                        }
                        else {
                            include('templates/Connexion.tpl');
                        }
                    }
                }
                else {
                    include('templates/Accueil.tpl');
                }
            ?>
        </div>
    </div>
    <script src="js/Javascript.js"></script>
</body>
</html>