<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
            Donner une valeur à cette variable et l'afficher.</p>
        <?php
        settype($entier, 'int');
        echo 'ma variable est de type int et initialiser avec rien  : ' . $entier . '<br>';
        $entier = 7;
        echo 'ma variable est de type int avec une valeur ' . $entier . '<br>';
        ?>
    </body>
</html>


