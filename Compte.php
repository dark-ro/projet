
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Réservation</title>
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
                   <form method="GET" action="inscription.php">
                <input type="submit" value="Deconnexion" class="inscrire">
                  </form>
                </div>
             </nav>
            
        </header>
      <article class="article-ins">
      <fieldset class="fild"> 
            <form class="form" method="POST" action="">
                <div  class="div-p">
                    <p>Reservez votre table</p>
                </div>
                <input type="text" class="input" name="name" id="nameP" required minlength="4" maxlength="50" placeholder="Nom">
                <input type="text" name="Prenom" id="PrenomP" required placeholder="Prénom">
                <input type="date" name="date" id=datej required>
                <input type="time" name="heure" id="heureP" required  min="09:00" max="18:00" required>
                <input type="email" name="email " id="emailP " required placeholder="email">
                <input type="number" name="age" id="ageP" required placeholder="Age">
                <input type="number" name="adulte" id="personnes" required placeholder="Nombres d'adulte ">
                <input type="number" name="enfant" id="personnes" required placeholder="Nombres d'enfants ">

                </div>
                </br>
                <div class="sub3">
                <input type="submit" value="soumettre" class="inscrire">
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
if (isset($_POST['date'])){
    $date=$_POST['date'];
}
if (isset($_POST['heure'])){
    $heure=$_POST['heure'];
}
if (isset($_POST['email'])){
    $email=$_POST['email'];
}
if (isset($_POST['age'])){
    $age=$_POST['age'];
}
if (isset($_POST['adulte'])){
    $adulte=$_POST['adulte'];
}
if (isset($_POST['enfant'])){
    $enfant=$_POST['enfant'];
}
if(isset($nom,$prenom,$date,$heure,$email,$age,$adulte,$enfant)){
$bdd= new PDO('mysql:host=localhost; dbname=dbins; charset=utf8', 'root','');
$requete= "INSERT INTO reservation(idR, nom, prenom, date, heure, email, age, adulte, enfant)
 VALUES ('', '$nom', '$prenom', '$date', '$heure', '$email', '$age', '$adulte', '$enfant')";
$reponse= $bdd->query($requete);
if($reponse){
    echo "<h3>Réservation </h3>";
}else{
    echo "erreur";
}

}

?> 

</html>