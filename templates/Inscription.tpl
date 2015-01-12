<h2 style="text-align: center; color: red">Inscrivez-vous</h2>  
<form class="inscription" action="req_inscription.php" method="post" name="inscription" class="form-horizontal">  
    <!-- c'est quoi les attributs action et method ? -->  
    <!-- qu'y a-t-il d'autre comme possiblité que post pour l'attribut method ? -->  
    <label class="label label-danger">Les champs obligatoires sont indiqués par *</label> 

    <div class="form-group row" style="margin-top:15px;">
        <label for="email" class="col-sm-2 control-label">E-mail :</label>
        <div class="col-sm-7"> 
            <input type="email" name="email" id="email" autofocus required class="form-control"/> 
        </div> 
            <!-- ajouter à input l'attribut qui lui donne le focus automatiquement OK -->  
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire OK -->  
            <!-- quelle est la différence entre les attributs name et id ? name : non unique (ex : utiliser lors de radiobutton) / id : unique OK -->  
            <!-- c'est lequel qui doit être égal à l'attribut for du label ? à l'id OK -->  
        <div class="col-sm-3"> 
            <span class="form_hint">Format attendu "name@something.com"</span>  
        </div>
    </div>

    <div class="form-group row"> 
        <label for="mdp1" class="col-sm-2 control-label">Mot de passe :</label>  
        <div class="col-sm-7">
            <input type="password" name="password" id="password" pattern="[a-zA-Z0-9_-]{6,8}" onkeyup="VerifPassword()" title="Le mot de passe doit contenir de 6 à 8 caractères alphanumériques." required placeholder="Password" class="form-control" >  
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire OK -->  
            <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) OK -->  
            <!-- spécifiez l'expression régulière: le mot de passe doit être composé de 6 à 8 caractères alphanumériques OK -->  
            <!-- quels sont les deux scénarios où l'attribut title sera affiché ? -->  
            <!-- encore une fois, quelle est la différence entre name et id pour un input ? -->
        </div>
        <div class="col-sm-3">   
            <span class="form_hint">De 6 à 8 caractères alphanumériques.</span>   
        </div>
    </div>

    <div class="form-group row"> 
        <label for="mdp2" class="col-sm-2 control-label">Confirmez mot de passe :</label>  
        <div class="col-sm-7">
            <input type="password" id="mdp2" required onkeyup="VerifPassword()" required placeholder="Confirm Password" class="form-control" >  
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->  
            <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->  
            <!-- pourquoi est-ce qu'on a pas mis un attribut name ici ? -->  
            <!-- quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ? -->  
        </div>
        <div class="col-sm-3">
            <span class="form_hint">Les mots de passes doivent être égaux.</span>   
        </div>
    </div>

    <div class="form-group row">  
        <label for="nom" class="col-sm-2 control-label">Nom :</label>  
        <div class="col-sm-7">
            <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control" />   
        </div>
    </div>

    <div class="form-group row"> 
        <label for="prenom" class="col-sm-2 control-label">Prénom :</label> 
        <div class="col-sm-7"> 
            <input type="text" name="prenom" id="prenom" required placeholder="Prénom" class="form-control" />   
        </div>
            <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire OK -->  
            <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) OK -->  
    </div>

    <div class="form-group row"> 
        <label for="tel" class="col-sm-2 control-label">Téléphone :</label>  
        <div class="col-sm-7">
            <input type="text" name="tel" id="tel" placeholder="Téléphone" class="form-control" />   
        </div>
    </div>

    <div class="form-group row"> 
        <label for="website" class="col-sm-2 control-label">Site Web :</label>  
        <div class="col-sm-7">
            <input type="website" name="website" id="website" placeholder="Website" class="form-control" />   
        </div>
    </div>

    <div class="form-group row"> 
        <label for="sexe" class="col-sm-2 control-label">Sexe :</label>  
        <div class="col-sm-2">
            <input type="radio" name="sexe" value="Homme" checked> Homme
        </div>
        <div class="col-sm-offset-1 col-sm-2">
            <input type="radio" name="sexe" value="Femme"> Femme 
        </div>
    </div>

    <div class="form-group row"> 
        <label for="birthdate" class="col-sm-2 control-label">Date de naissance:</label>  
        <div class="col-sm-7">
            <input type="date" name="birthdate" id="birthdate" placeholder="JJ/MM/AAAA" required onchange="CalculAge()" class="form-control" /> 
        </div>
        <div class="col-sm-3">  
            <span class="form_hint">Format attendu "JJ/MM/AAAA"</span>   
        </div>
    </div> 

    <div class="form-group row"> 
        <label for="age" class="col-sm-2 control-label">Age:</label>  
        <div class="col-sm-7">
            <input type="text" name="age" id="age" disabled class="form-control" />   
        </div>
            <!-- à quoi sert l'attribut disabled ? -->  
    </div>

    <div class="form-group row"> 
        <label for="ville" class="col-sm-2 control-label">Ville :</label>  
        <div class="col-sm-7">
            <input type="text" name="ville" id="ville" placeholder="Ville" class="form-control" />   
        </div>
    </div>

    <div class="form-group row"> 
        <label for="taille" class="col-sm-2 control-label">Taille :</label>  
        <div class="col-sm-7">
            <input type="range" id="tailleRange" min="0" max="2.50" step="0.01" oninput="this.form.taille.value=this.value" />
        </div>
        <div class="col-sm-3">
            <input type="number" name="taille" id="taille" placeholder="Taille" min="0" max="2.50" step="0.01" required oninput="this.form.tailleRange.value=this.value" > mètre 
        </div>
    </div>

    <div class="form-group row"> 
        <label for="couleur" class="col-sm-2 control-label">Couleur :</label>  
        <div class="col-sm-7">
            <input type="color" name="couleur" id="couleur" class="form-control" value="#000000"/>   
        </div>
    </div>

    <div class="form-group row"> 
        <label for="profilepicfile" class="col-sm-2 control-label">Photo de profil:</label>  
        <div class="col-sm-7">
            <input type="file" id="profilepicfile" onchange="loadProfilePic(this)" class="form-control" />  
            <!-- l'input profilepic va contenir le chemin vers l'image sur l'ordinateur du client -->  
            <!-- on ne veut pas envoyer cette info avec le formulaire, donc il n'y a pas d'attribut name --> 
            <input type="hidden" name="profilepic" id="profilepic"/>  
            <!-- l'input profilepic va contenir l'image redimensionnée sous forme d'une data url -->   
            <!-- c'est cet input qui sera envoyé avec le formulaire, sous le nom profilepic -->  
        </div>
        <div class="col-sm-3">
            <canvas id="preview" width="0" height="0"></canvas>  
            <!-- le canvas (nouveauté html5), c'est ici qu'on affichera une visualisation de l'image. -->  
            <!-- on pourrait afficher l'image dans un élément img, mais le canvas va nous permettre également   
            de la redimensionner, et de l'enregistrer sous forme d'une data url-->   
        </div>
            
    </div> 

    <div class="form-group"> 
        <div class="col-sm-offset-3 col-sm-4">
            <input type="submit" value="Soumettre Formulaire" class="btn btn-primary" style="width:100%" >  
        </div>
    </div> 

</form>


