<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions , filtres et expressions régulières SQL</title>
</head>
<body>
    <?php
    //  $serveur = "localhost";
    //  $login = "root";
    //  $pass =  "dia_yaya";

    //  try{
    //  $connexion = new PDO("mysql:host=$serveur;dbname=tachephp", $login, $pass);
    //  $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // filtre pour trouver un entier

        $email1 = "ducobi@gmail.com";
        $email2 = "ducobi@gmail";

        $email2 = filter_var($email2, FILTER_SANITIZE_EMAIL);
        echo $email2;

        if(!filter_var($email2, FILTER_VALIDATE_EMAIL) === false){
            echo 'Le mail ' .$email2. ' possède une forme valide</br>';
        }else{
            echo 'Le mail ' .$email2. ' n\'est pas valide<br/>';
        }
        
    
    // $resultat = $requete->fetchAll();
    // echo '<pre>';
    // print_r($resultat);
    // echo '</pre>';
    //  }
    

    //  catch(PDOException $e){
    //     echo 'Echec de la connexion : ' .$e->getMessage();
    //  }
    ?>
    </table>


</body>
</html>
