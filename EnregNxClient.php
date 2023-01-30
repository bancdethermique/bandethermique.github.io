<!DOCTYPE html>

<html>

<head>
    <title>NosAmisLesBetes.fr</title>  <!--le titre dans l'onglet internet-->
    <link rel="stylesheet" href="CharteGraphiqueSite.css">
    <link rel="icon" href="lapinou.png">  <!--l'icône dans l'onglet internet-->
        
</head>

<body>
    <header>
        <table style="width: 100%;">
     <tr>
<td>
    <nav class="home">
        <a class="styled" href="AccueilSite.html">Accueil</a>
    </nav>
</td>
<td>         <h1>Nos Amis Les Betes</h1>
</td>
     </tr>

        </table>
    </header>



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
   $AjouterDisque="INSERT INTO tabclients  VALUES ('$id', '$prenom', '$age')";

   // Exécution de la requête
   mysqli_query($connection, $AjouterDisque) or die('Erreur SQL !'.$AjouterDisque.'<br>'.mysqli_error($connection));
}
header("PageProduits.html");

exit;
?>

</body>


</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produitssite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tabproduits";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ID: ". $row["ID"]. ",   Désignation: ". $row["Désignation"].", Prix: " . $row["Prix"] .", Quantité: " . $row["Quantité"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>