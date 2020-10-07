<!<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        echo "Immatriculation: {$v->getImmatriculation()} , Marque: {$v->getMarque()} , Couleur: {$v->getCouleur()}";
        ?>
    </body>
</html>