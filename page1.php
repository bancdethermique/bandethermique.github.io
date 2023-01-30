<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
<body>

<h2>HTML Forms</h2>

<form action="PageProduits.html" method="post">
  <label for="name">Nom:</label><br>
  <input type="text" id="Nom" name="Nom" ><br>
  <label for="lname">Prénom:</label><br>
  <input type="text" id="Prenom" name="Prenom"><br>
  <p>animal
    <select id="Animal" name="Animal">
    <option value="Chien">Chien</option>
    <option value="Chat">Chat</option>
    <option value="Poisson">Poisson</option>
    <option value="Autres">Autres</option>
    </select>
</p>
<input type="submit" value="envoyer">
</form> 

<?php
// Connexion à MySQL
$connection=mysqli_connect("localhost", "root", "", "produitssite");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
else {
   $id=$_POST['Nom'];
   $prenom=$_POST['Prenom'];
   $age=$_POST['Animal'];
 
   // Requête d'insertion
   $Liredisque="SELECT* FROM produitssite  VALUES ('$id', '$prenom', '$age')";

   // Exécution de la requête
   mysqli_query($connection, $Liredisque) or die('Erreur SQL !'.$Liredisque.'<br>'.mysqli_error($connection));
}

//header("C:\wamp64\www\siteolivier\PageProduits.html");
exit;
?>


<p>If you click the "Submit" button, the form-data will be sent to a page called "/EnregNxClient.php".</p>
</body>
</html>