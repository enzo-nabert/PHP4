<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v){
                echo "<a href='routeur.php?action=read&immat={$v->getImmatriculation()}'> Immatriculation: {$v->getImmatriculation()} </a> <a style='color: #ff0000' href='routeur.php?action=delete&immat={$v->getImmatriculation()}'>SUPPRIMER</a><br>";
            }
        ?>
    </body>
</html>