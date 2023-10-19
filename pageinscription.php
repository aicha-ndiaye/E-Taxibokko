<?php  
include_once("bd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convoiturage</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contenir">
<div class="container">
<form  action="" method="post"  class="formA">
                <h1>CONNEXION</h1>
                <p>votre chauffeur en un clic !</p>
               <input type="submit" name="facebook" value="continuer avec facebook" >
                <!-- <a href="https://www.facebook.com/login.php">continuer avec facebook</a> -->
                <h4>ou</h4> <br><br>
                <label for="adresse mail">adresse mail</label>
                <input type="email" name="email" ><br><br>
                <label for="mot de passe">mot de passe</label> 
                <input type="password" name="mot_de_passe"><br><br>
                <input type="submit" name="connexion" value="connexion">
 </form>


 </div>                                                                                                                                                                                 
 <div class="sonou">
    <form action="" method="post" class="formB">
                <h1> INSCRIPTION  </h1>
                <p>finalisez votre inscrption en renseignant les information manquantes</p>
                <label for="prenom">prenom</label>
                <input type="text"name="prenom"><br><br>
                <label for="nom">nom</label>
                <input type="text" name="nom"><br><br>
                <label for="adresse_mail">adresse mail</label>
                <input type="email" name="email"><br><br>
                <label for="numero">numero de telephone</label>
                <input type="number" name =numero> <br><br>
                <label for="mot_de_passe">mot de passe</label>
                <input type="password" name="mot_de_passe"><br><br>
                <input type="submit" name="inscrire" value="s'inscrire">
     </div>
    </form>
    </div>
</body>
</html>