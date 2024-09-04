<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions , filtres et expressions régulières SQL</title>
</head>
<body>
    <?php
     $serveur = "localhost";
     $login = "root";
     $pass =  "dia_yaya";

     try{
     $connexion = new PDO("mysql:host=$serveur;dbname=tachephp", $login, $pass);
     $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $foncsql = "SELECT MAX(age) FROM incrits";
    $requete = $connexion->prepare( $foncsql);
    $requete->execute();
    
    $resultat = $requete->fetchAll();
    echo '<pre>';
    print_r($resultat);
    echo '</pre>';
     }
    

     catch(PDOException $e){
        echo 'Echec de la connexion : ' .$e->getMessage();
     }
    ?>
</body>
</html>