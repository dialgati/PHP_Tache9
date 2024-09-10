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

        $int1 = 0;
        $int2 = 50;
        $int3  = 150;

        $min = 1;
        $max  = 100;

        if(!filter_var($int3, FILTER_VALIDATE_INT,
        array("options" => array("min_range"=>$min, "max_range"=>$max))) == false){
            echo "Le nombre est dans la bonne fourchette";
        } else {
            echo "Nombre incorrect ou non entier";
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
