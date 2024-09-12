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

    // Verifier la validation d'un url

        $url1 = "http://peéérre-maodo.sn";

        $newurl = filter_var($url1, FILTER_SANITIZE_URL);

        if(!filter_var($newurl, FILTER_VALIDATE_URL) === false){
            if($newurl != $url1){
                echo 'L\'url ' .$url1 . ' a été modifié en '.$newurl.' afin de la rendre valide<br/>';
        }else{
            echo 'url valide';
        }
    }else {
        echo 'url invalide';
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
