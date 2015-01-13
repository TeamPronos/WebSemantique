<?php
    session_start();

    require_once("Modeles/pdo.php");
    require_once("Modeles/fct.inc.php");
    $estConnecte = estConnecte();

    if(!isset($_REQUEST['page']) || ($estConnecte == false){
        $_REQUEST['page'] = 'Connexion.tpl';
    }
    $page = $_REQUEST['page'];
?>

<!DOCTYPE html>  
<html>  
<head>  
    <meta charset=utf-8 />  
    <title>Pictionnary</title>
    <link href="bootstrap-3.3.1/css/bootstrap.css" rel="stylesheet">       
</head>  
<body>
    <?php if($estConnecte) include('templates/En_tete.tpl');?>

    <div style="margin-top:60px; margin-left:20px; margin-bottom:30px;" class="row">
        <div class="col-sm-6 col-sm-offset-3">
        	<?php
                if ( $page ) {
                        include('templates/' . $page);
                }
            ?>
        </div>
    </div>
    <script src="js/Javascript.js"></script>
</body>
</html>