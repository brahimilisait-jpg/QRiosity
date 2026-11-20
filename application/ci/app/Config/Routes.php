
<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Accueil;
use App\Controllers\Compte;
use App\Controllers\Actualite;
use App\Controllers\Presentation;
use App\Controllers\Galerie;


/** @var RouteCollection $routes */

$routes->get('/', 'Accueil::afficher');
$routes->get('accueil/afficher', [Accueil::class, 'afficher']);
$routes->get('accueil/afficher/(:segment)', [Accueil::class, 'afficher']);
$routes->get('presentation/afficher', [Presentation::class, 'afficher']);
$routes->get('admin/afficher', 'Admin::afficher');


$routes->get('compte/lister', [Compte::class, 'lister']);
$routes->get('actualite/afficher', [Actualite::class, 'afficher']);
$routes->get('actualite/afficher/(:segment)', [Actualite::class, 'afficher']);

$routes->get('livre_or/afficher', [\App\Controllers\Livre_or::class, 'afficher']);


$routes->get('livre_or/ajouter', [\App\Controllers\Livre_or::class, 'ajouter']);


$routes->get('galerie', [\App\Controllers\Galerie::class, 'afficher']);
$routes->get('galerie/(:segment)', [\App\Controllers\Galerie::class, 'detail/$1']);



$routes->get('compte/creer', [Compte::class, 'creer']);
$routes->post('compte/creer', [Compte::class, 'creer']);
$routes->post('livre_or/enregistrer', [\App\Controllers\Livre_or::class, 'enregistrer']);
