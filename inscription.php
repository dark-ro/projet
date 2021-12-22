
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> s'inscrire</title>
        <link href="Style3.css" rel="Stylesheet">
    </head>
    <body>
        <header class="header-ins">
            <span class="header-h2">
                
                   <a href="index.php" style="color: inherit; text-decoration: none;"><b> Restaurant la papille</b></a>
            
            </span>
            <nav class="header-ins-nav">
                   <a href="index.php">Aceuil</a>
                   <a href="inscription.php">Incription</a>
                   <a href="Visite.php">visite</a>
                   <div class="sub2">
                   <form method="POST" action="Connexion.php">
                <input type="submit" value="Connexion" class="inscrire">
                  </form>
                </div>
             </nav>
            
        </header>
      <article class="article-ins">
      <fieldset class="fild"> 
            <form class="form" method="POST" action="">
                <div  class="div-p">
                    <p>Inscrivez vous</p>
                </div>
                <input type="text" class="input" name="name" id="name" required minlength="4" maxlength="50" placeholder="Nom">
                <input type="text" name="Prenom" id="Prenom" required placeholder="Prénom"required>
                <input type="password" name="mp" id="mot de passe" required placeholder=" mot de passe "required>
                <input type="email" name="email " id="email " required placeholder="email"required>
                <input type="number" name="age" id="age" required placeholder="Age"required>
                </div>
                </br>
                <div class="sub">
                <input type="submit" value="Valider" class="inscrire">
                </div>
                         
            </form>
            </fieldset>
      </article>
    </body>
<?php
if (isset($_POST['name'])){
    $nom=$_POST['name'];
}
if (isset($_POST['Prenom'])){
    $prenom=$_POST['Prenom'];
}
if (isset($_POST['mp'])){
    $MP=$_POST['mp'];
}
if (isset($_POST['email'])){
    $email=$_POST['email'];
}
if (isset($_POST['age'])){
    $age=$_POST['age'];
}
if(isset($nom,$prenom,$MP,$email,$age)){
    $bdd= new mysqli("localhost", "root", "", "dbins");
$requete= "INSERT INTO compte(idC, Nom, Prenom, MotP, Email, Age)
 VALUES ('', '$nom', '$prenom', '$MP', '$email', '$age')";
$reponse= $bdd->query($requete);
if($reponse){
    echo "<h3>Vous êtes inscrit </h3>";
}else{
    echo "erreur";
}

}

?> 

</html>