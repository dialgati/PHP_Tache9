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

    // Verifier la vqlidqtion d'un mail

        $email = "g/d/handalons@g(mail).com";

        $emailnew = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($emailnew, FILTER_VALIDATE_EMAIL) === false){
            if($emailnew != $email){
                echo 'Le mail possède désormais une forme valide.<br/>
                Mail envoyé : ' .$email . '<br/>
                Mail aprés transformation : '.$emailnew;
        }else{
            echo 'Adresse email valide';
        }
    }else {
        echo 'Adresse invalide';
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
