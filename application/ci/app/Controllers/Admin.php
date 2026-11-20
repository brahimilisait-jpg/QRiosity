<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function afficher()
    {
        return view('templates/haut_admin')
            . '<h1>Bienvenue dans la partie administration</h1>'
            . view('templates/bas_admin');
    }
}