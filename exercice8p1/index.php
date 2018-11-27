<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice8</title>
    </head>
    <body>
        <p>Créer 3 variables.
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.</p>
        <div>
            <?php
            $number1 = 3 + 4;
            $number2 = 5 * 20;
            $number3 = 45 / 5;
            ?>
        </div>
        <div>Le résultat de 3 + 4 est <?= $number1; ?> , le résultat de 5 * 20 est <?= $number2; ?> et le quotien de 45 / 5 est <?= $number3; ?>.</div>
    </body>
</html>
