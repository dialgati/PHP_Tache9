<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions régulières SQL</title>
</head>
<body>
    <?php
        $r = "J'apprends à coder1";


        if (preg_match("/[a-z]/",$r)) {
            echo "L'expression a bien été trouvée<br/>";
        }else {
            echo "Expression non trouvée<br/>";
        }
        
        if (preg_match("/^[A-Z]/",$r)) {
            echo "L'expression a bien été trouvée<br/>";
        }else {
            echo "Expression non trouvée<br/>";
        }

        if (preg_match("/[0-9]/i",$r)) {
            echo "L'expression a bien été trouvée<br/>";
        }else {
            echo "Expression non trouvée<br/>";
        }
    ?>
</body>
</html>