<?php
namespace App\Controllers;

use App\Models\Db_model;

class Livre_or extends BaseController
{
    public function afficher()
    {
        $model = model(Db_model::class);

        $data['commentaires'] = $model->get_all_commentaires();
        $data['presentation'] = $model->get_presentation();

        return view('templates/haut', $data)
            . view('menu_visiteur')
            . view('livre_or', $data)
            . view('templates/bas', $data);
    }

    public function ajouter()
    {
        $data['presentation'] = model(Db_model::class)->get_presentation();

        return view('templates/haut', $data)
            . view('menu_visiteur')
            . view('livre_or_ajouter', $data)
            . view('templates/bas', $data);
    }

    public function enregistrer()
    {
        $model = model(Db_model::class);

        $saisie = $this->request->getPost();

        $ticket = $model->get_ticket(
            $saisie['tic_matricule'],
            $saisie['tic_mot_de_passe']
        );

        if (!$ticket) {
            return redirect()->to(site_url('livre_or/ajouter'))
                ->with('erreur', 'Ticket invalide.');
        }

        $model->ajouter_commentaire(
            $ticket->tic_id,
            $saisie['tic_mot_de_passe'],
            $saisie['cmt_texte'],
            $saisie
        );

        return redirect()->to(site_url('livre_or'))
            ->with('message', 'Votre commentaire a bien été enregistré.');
    }
}