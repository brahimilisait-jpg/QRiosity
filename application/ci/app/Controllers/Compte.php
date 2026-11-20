<?php
namespace App\Controllers;
use App\Models\Db_model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Compte extends BaseController
{
    public function __construct()
    {
        //...
    }

    public function lister()
    {
        $model = model(Db_model::class);
        $data['titre'] = "Liste de tous les comptes";
        $data['logins'] = $model->get_all_compte();
        $data['resultat'] = $model->get_compter_comptes();
        $data['presentation'] = $model->get_presentation();

        return view('templates/haut_admin', $data)
            . view('affichage_comptes', $data)
            . view('templates/bas_admin');
    }


        public function creer()
    {
        
    helper('form');
    $model = model(Db_model::class);
   
  
    if ($this->request->getMethod()=="POST") //POUR VERSION >= V4.5.0
    {
        if (! $this->validate([
    'cpt_pseudo' => 'required|max_length[300]|min_length[2]',
    'cpt_mot_de_passe' => 'required|max_length[128]|min_length[8]'
], [
    'cpt_pseudo' => [
        'required' => 'Veuillez entrer un pseudo pour le compte !',
    ],
    'cpt_mot_de_passe' => [
        'required' => 'Veuillez entrer un mot de passe !',
        'min_length' => 'Le mot de passe saisi est trop court !',
    ],
])) {

        // La validation du formulaire a échoué, retour au formulaire !
        
        return view('templates/haut_admin', ['titre' => 'Créer un compte'])
        . view('compte/compte_creer')
        . view('templates/bas_admin');
        }
        // La validation du formulaire a réussi, traitement du formulaire
        $recuperation = $this->validator->getValidated();

        $model->set_compte($recuperation);

        $data['le_compte']=$recuperation['cpt_pseudo'];
        $data['le_message']="Nouveau nombre de comptes : ";
        //Appel de la fonction créée dans le précédent tutoriel :
        $data['le_total']=$model->get_compter_comptes();


        return view('templates/haut_admin', $data)
        . view('compte/compte_succes')
        . view('templates/bas_admin');

    }

        // L’utilisateur veut afficher le formulaire pour créer un compte
        return view('templates/haut_admin', ['titre' => 'Créer un compte'])
            . view('compte/compte_creer')
            . view('templates/bas_admin');
        }
    
    
    }