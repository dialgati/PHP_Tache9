<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions régulières SQL</title>
</head>
<body>
    <?php
        $r = "J'apprends à coder";
        $regex1 = "coder";
        $regex2 = "ode";
        $regex3 = "CoDeR";

        if (preg_match("/$regex1/",$r)) {
            echo "L'expression a bien été trouvée<br/>";
        }else {
            echo "Expression non trouvée<br/>";
        }

         if (preg_match("/$regex2/",$r)) {
            echo "L'expression a bien été trouvée<br/>";
        }else {
            echo "Expression non trouvée<br/>";
        }

        if (preg_match("/$regex3/i",$r)) {
            echo "L'expression a bien été trouvée<br/>";
        }else {
            echo "Expression non trouvée<br/>";
        }
    ?>
</body>
</html>