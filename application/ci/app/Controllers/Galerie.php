<?php
namespace App\Controllers;

use App\Models\Db_model;

class Galerie extends BaseController
{
    public function afficher()
    {
        $model = model(Db_model::class);

        $data['oeuvres'] = $model->get_all_oeuvres();
        $data['presentation'] = $model->get_presentation();

        return view('templates/haut', $data)
            . view('menu_visiteur')
            . view('galerie', $data)
            . view('templates/bas', $data);
    }

    public function detail($code)
    {
        $model = model(Db_model::class);

        $data['oeuvre'] = $model->get_oeuvre_by_code($code);
        $data['presentation'] = $model->get_presentation();

        return view('templates/haut', $data)
            . view('menu_visiteur')
            . view('oeuvre_detail', $data)
            . view('templates/bas', $data);
    }

    
}