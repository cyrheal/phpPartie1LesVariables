<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <p>Créer une variable km. L'initialiser à 1. Afficher son contenu.
            Changer sa valeur par 3. Afficher son contenu.
            Changer sa valeur par 125. Afficher son contenu.</p>
        <div>
            <?php
            $km = 1;
            echo 'ma variable km : ' . $km . ' km';
            ?>
            <div>
                <?php
                $km = 3;
                echo 'ma variable km : ' . $km . ' km';
                ?>
                <div>
                    <?php
                    $km = 125;
                    echo 'ma variable km : ' . $km . ' km';
                    ?>
                </div>
            </div>
        </div>
        <div>
            <?php
            $km = 3;
            ?>
            <div> j'ai parcouru <?= $km; ?>km</div>
        </div>
    </body>
</html>
