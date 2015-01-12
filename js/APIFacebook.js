window.fbAsyncInit =function(){  
      FB.init({
        appId      :'322088381332698',
        status     :true,// vérifier le statut de connexion
        cookie     :true,// autoriser les cookies pour permettre au serveur (et le SDK PHP) d'accéder à la session
        xfbml      :true// analyser le XFBML (déprécié par Facebook, c.f., https://developers.facebook.com/blog/post/568/)
      });
      
      // Ici on s'abonne à l'évèement JavaScript auth.authResponseChange. Cet évènement est généré pour tout 
      // changement dans l'authentification, comme la connexion, la déconnexion, ou le rafraîchissement de la session. 
      // Donc lorsqu'un utilisateur déjà connecté tente se se connecter à nouveau, le cas correct ci-dessous sera géré
      FB.Event.subscribe('auth.authResponseChange',function(response){
        // Est-ce que l'utilisateur est connecté au moment où l'évènement est généré ? 
        if(response.status ==='connected'){
          console.log("Y'a quelqu'un");
          // c.f. l'objet response passé en paramète du callback est un objet JSON décrit après ce code.
          testAPI();
        } else if (response.status ==='not_authorized'){ 
          console.log("Y'a quelqu'un, mais il n'est pas connecté à l'application");
          // Dans ce cas, la personne est loguée Facebook, mais pas à l'application.
          // Donc on appelle FB.login() pour afficher la boîte de dialogue de connexion à l'application.
          // On ferait pas comme ça pour une vrai application, pour deux raisons:
          // (1) Un popup créé automatiquement par JavaScript serait bloqué par la plupart des navigateurs
          // (2) c'est pas cool de sauter au cou de l'utilisateur dès le chargement de la page comme ça.
          FB.login();
        }else{
          console.log("l'utilisateur n'est pas connecté à Facebook");
          // Dans ce cas, la personne n'est pas connectée à Facebook. Donc on appelle la méthode login().
          // A ce moment, on ne sait pas si l'utilisateur s'est déjà connecté à l'application.
          // si ils ne se sont jamais connecté à l'application, ils verront la boîte de dialogue de connection
          // à l'application juste après s'être connecté à Facebook.
          FB.login();
        }
    });
  };
      
  // Charger le SDK de manière asynchrone (comme pour les boutons j'aime et partager)
  (function(d){
    var js, id ='facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)){return;}
    js = d.createElement('script'); js.id = id; js.async =true;
    js.src ="//connect.facebook.net/fr_FR/all.js";
    ref.parentNode.insertBefore(js, ref);
  }(document));
  
  // Ici on fait un requête très simple à l'API Open Graph lorsque l'utilisateur est connecté
  function testAPI(){
    console.log('Bienvenue !  On récupère vos informations.... ');
    FB.api('/me',function(response){
      console.log('Bienvenue, '+ response.name +'.');
    });
  }