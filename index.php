<?php
    $session_email = (isset($_GET['email'])) ? htmlentities($_GET['email']) : NULL;
    if ( $session_email ) {
        $_SESSION['email'] = $session_email;
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
				 
			</div>
            <div class="collapse navbar-collapse">
                
             <?php if ( isset($_SESSION['email']) ) {
                    echo "<label class='navbar-brand'>".$_SESSION['email']."</label>
                    <button class='button-default'>Deconnexion</button>";

                }
                else {
                    echo "
                    <a class='navbar-brand' href='index.php?page=Connexion.tpl'>Connexion</a>
                    <a class='navbar-brand' href='index.php?page=Inscription.tpl'>Inscription</a>";
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