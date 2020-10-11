<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Create</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="get" action="./routeur.php">
            <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                    <label for="immat_id">Immatriculation</label>
                    <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required pattern="\w{0,8}?" />
                    <label for="marque_id">Marque</label>
                    <input type="text" name="marque" id="marque_id" required/>
                    <label for="couleur_id">Couleur</label>
                    <input type="text" name="couleur" id="couleur_id" required/>
                    <input type='hidden' name='action' value='created'>
                </p>
                <p>
                    <input type="submit" value="Envoyer"/>
                </p>
            </fieldset>
        </form>
    </body>
</html>
