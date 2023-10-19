<?php 
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 
 try{
     $conn = new PDO("mysql:host=$servername;dbname=info_clients", $username, $password);
     
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo 'Connexion réussie';
 }
 
 catch(PDOException $e){
   echo "Erreur de connexion a la base de données indiquée: " . $e->getMessage();
 }

 if($_SERVER["REQUEST_METHOD"]=== "POST"){
    if(isset($_POST["inscrire"])){
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    
    $email=$_POST['email'];
    $numero=$_POST['numero'];
    $mot_de_passe=$_POST['mot_de_passe'];

    $sql = "INSERT INTO info_clients (nom,prenom,numero,email,mot_de_passe) values (:nom,:prenom,:numero,:email,:mot_de_passe)";
    $requete=$conn->prepare($sql);
    $requete->bindParam(':nom',$nom);
    $requete->bindParam(':prenom',$prenom);
    $requete->bindParam(':numero',$numero);
    $requete->bindParam(':email',$email);
    $requete->bindParam(':mot_de_passe',$mot_de_passe);
if ($requete->execute()) {
    echo" inscription bien reuissi";

}else{
    echo" inscription echouer";
}

 }elseif ((isset($_POST["connexion"]))) {
    $email=$_POST['email'];
    $mot_de_passe=$_POST['mot_de_passe'];
  
$reqù = "SELECT *FROM info_clients WHERE email=:email";  
$requete=$conn->prepare($req);  
$requete->bindParam(':email',$email);
$requete->execute();
   $user=$requete->fetch(); // recuperer des champs qui se trouve dans un tableau (fetch)
   if ($user && $mot_de_passe===$user['mot_de_passe']) {
    echo "connexion reussi";
   }else {
    echo"echec de connexion";
   }
 }
}
?>