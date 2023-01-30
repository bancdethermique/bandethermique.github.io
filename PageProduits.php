<!DOCTYPE html>

<html>

<head>
    <title>NosAmisLesBetes.fr</title>
    <!--le titre dans l'onglet internet-->
    <link rel="stylesheet" href="CharteGraphiqueSite.css">
    <link rel="icon" href="lapinou.png">
    <!--l'icône dans l'onglet internet-->
    <style>
        .tableproduit {
            margin-left: 50%;
            margin-right: 50%;
            text-align: center;
            margin-top: 120px;
        }
    </style>
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
                <td>
                    <h1>Nos Amis Les Betessss</h1>
                </td>
            </tr>

        </table>
    </header>

    <nav>
        <a class="styled" href="AccueilSite.html">Qui sommes-nous ?</a>
        <a class="styled" href="PageProduits.php">Produits</a>
        <a class="styled" href="LinkU.html">Liens utiles</a>
        <a class="styled" href="page1.html">Devenir membre</a>
        <a class="styled" href="Panier.html">Panier</a>
    </nav>

    <table class=tableproduit border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Designation</th>
                <th>Prix</th>
                <th>Quantite</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "produitssite";

            // Create connection
            $connexion = new mysqli("localhost", "root", "", "produitssite");

            // Check connection
            if ($connexion->connect_error) {
                die("Connection failed: " . $connexion->connect_error);
            }

            $req = "SELECT * FROM tabproduits";
            $res = mysqli_query($connexion, $req);

            if ($res->num_rows > 0) {
                // output data of each row
                while ($data = mysqli_fetch_array($res)) {
                    $tablo[] = $data;
                }



                $nb = count($tablo);

                for ($i = 0; $i < $nb; $i++) {
                    //les valeurs à afficher
                    $ID = $tablo[$i]['ID'];
                    $Designation = $tablo[$i]['Designation'];
                    $Prix = $tablo[$i]['Prix'];
                    $Quantite = $tablo[$i]['Quantite'];
                    echo '
            <tr>
                <td>
                    ' . $ID . '
                </td>
                <td>
                    ' . $Designation . '
                </td>
                <td>
                    ' . $Prix . '
                </td>
                <td>
                    ' . $Quantite . '
                </td>
            </tr>';
                }
            }

            $connexion->close();
            ?>


        </tbody>


    </table>

</body>


</html>