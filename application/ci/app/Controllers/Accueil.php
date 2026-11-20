<?php
namespace App\Controllers;

use App\Models\Db_model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Accueil extends BaseController
{
    public function afficher($donnee = '')
    {
        $model = model(Db_model::class);

        $data['parametre_url'] = ($donnee);
        
        $data['actualites'] = $model->get_all_actualites();
       $data['commentaires'] = $model->get_all_commentaires();
       $data['presentation'] = $model->get_presentation();
        

        return view('templates/haut', $data)
        .view('templates/haut_accueil', $data)
        . view('menu_visiteur')
        . view('affichage_accueil', $data)
        . view('templates/bas', $data)
        . view('templates/bas_accueil', $data);
    }
}
?>
