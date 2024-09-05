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

        $int1 = 200;
        $int2 = 'aaa';
        $int3  = "0";

        if(filter_var($int3, FILTER_VALIDATE_INT) === 0 OR
            !filter_var($int3, FILTER_VALIDATE_INT) === false){
            echo "La variable contient bien un nombre entier valide </br>";
        } else{
            echo "La variable ne contient d'entier valide </br>";
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
