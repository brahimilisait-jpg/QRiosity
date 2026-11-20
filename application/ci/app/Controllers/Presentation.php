<?php

namespace App\Controllers;

class Presentation extends BaseController
{
    public function afficher()
    {
        return view('presentation');
    }
}