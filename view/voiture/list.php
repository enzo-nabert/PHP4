<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v){
                echo "<p> Immatriculation: {$v->getImmatriculation()} , Marque: {$v->getMarque()} , Couleur: {$v->getCouleur()} </p>";
            }
        ?>
    </body>
</html>