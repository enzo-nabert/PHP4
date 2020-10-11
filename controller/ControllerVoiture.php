<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read(){
        $v = ModelVoiture::getVoitureByImmat($_GET['immat']);
        if ($v != null){
            require ('../view/voiture/detail.php');
        }else{
            $error = "<p>Voiture inexistante</p>";
            require ('../view/voiture/error.php');
        }
    }

    public static function create(){
        require '../view/voiture/create.php';
    }

    public static function created(){
        var_dump($_GET);
        $voiture = new ModelVoiture($_GET);
        $voiture->save();
        self::readAll();
    }
}
