<?php
 session_start();
 ?>
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
             </nav>
        </header>
      <article class="article-ins">
      <fieldset class="fild"> 
            <form class="form" method="GET" action="">
                <div  class="div-p">
                    <p>Connexion</p>
                </div>
                <input type="text" class="input" name="name" id="name" required minlength="4" maxlength="50" placeholder="nom d'utilisateur ">
                <input type="password" name="mp" id="mot de passe" required placeholder=" mot de passe "required>
                </div>
                </br>
                <div class="sub">
                <input type="submit" value="Valider" class="inscrire">
                </div>      
            </form>
            </fieldset>
      </article>
 
      <?php
  
    if(isset($_GET['name'])&& isset($_GET['mp'])){
        $bdd= new PDO('mysql:host=localhost; dbname=dbins; charset=utf8', 'root','');
        $req= "SELECT Nom, MotP FROM Compte";
        $reponse= $bdd-> query($req);
        while ($donnees = $reponse->fetch()){
            if($donnees['Nom']==$_GET['name'] && $donnees['MotP']==$_GET['mp']){
                header('location:Compte.php');
            }   
        else{
            echo "<h3> Vous n'etes pas inscrit</h3>";
        }
        }
    }
   
  ?>
  <?php
  //$reponse->closeCursor();
  ?>
    </body>
</html>