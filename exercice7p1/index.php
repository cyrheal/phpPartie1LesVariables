<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</p>
        <?php
        $lastname = 'Simonot';
        $firstname = 'Cyril';
        $age = 32;
        echo 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans. ';
        ?>
    </body>
</html>

