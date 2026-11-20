<?php
namespace App\Controllers;
use App\Models\Db_model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Actualite extends BaseController
{
    public function __construct()
    {
        //...
    }

    public function afficher($numero = 0)
    {
        // 1. Si le paramètre n'est pas numérique
        if (!ctype_digit((string) $numero)) {
            $data['message'] = "Erreur : veuillez saisir un numéro !";
            $model = model(Db_model::class);
            $data['presentation'] = $model->get_presentation();

            return view('templates/haut', $data)
                . view('menu_visiteur')
                . view('actu_indisponible', $data)
                . view('templates/bas', $data);
        }

        $model = model(Db_model::class);

        if ($numero == 0) {
            return redirect()->to('/');
        }
        else {
            $data['titre'] = 'Actualité :';
            $data['news'] = $model->get_actualite($numero);

            $data['presentation'] = $model->get_presentation();

            // 2. Si l'actualité est cachée
            if ($data['news']->act_etat == 'C') {
                $data['message'] = "Cette actualité n'est pas disponible.";

                return view('templates/haut', $data)
                    . view('menu_visiteur')
                    . view('actu_indisponible', $data)
                    . view('templates/bas', $data);
            }

            return view('templates/haut', $data)
                . view('affichage_actualite', $data)
                . view('templates/bas', $data);
        }
    }
}