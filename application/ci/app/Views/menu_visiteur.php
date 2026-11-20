
<nav class="menu-visiteur">

    <!-- Bouton d'ouverture -->
    <div class="menu-trigger-container">
        <button class="menu-trigger" id="ouvrirMenu"
                type="button"
                aria-expanded="false"
                aria-controls="panneauMenu">

            <i class="fas fa-compass"></i>
            EXPLORER
            <i class="fas fa-chevron-down fleche-menu"></i>

        </button>
    </div>

    <!-- Panneau de navigation -->
    <div class="menu-overlay" id="panneauMenu">

        <div class="menu-contenu">

            <div class="menu-entete">
                <div>
                    <span class="menu-surtitre">PARIS EXPO</span>
                    <h2>Explorez notre univers</h2>
                </div>

                <button type="button" class="fermer-menu"
                        id="fermerMenu"
                        aria-label="Fermer le menu">
                    <i class="fas fa-times"></i>
                </button>
            </div>


            <div class="menu-cartes">

                <a href="https://obiwan.univ-brest.fr/~e22410042/"
                class="menu-carte carte-accueil">

                    <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?w=500"
                        alt="Accueil Paris Expo">

                    <span class="carte-numero">01</span>
                    <div class="carte-infos">
                        <h3>Accueil</h3>
                        <span>Revenir à la page d'accueil ↗</span>
                    </div>
                </a>

                <a href="<?= base_url('/index.php/presentation/afficher') ?>"
                   class="menu-carte carte-presentation">

                    <img src="https://images.unsplash.com/photo-1577083552431-6e5fd01aa342?w=500"
                         alt="Galerie d'art">

                    <span class="carte-numero">01</span>
                    <div class="carte-infos">
                        <h3>Présentation</h3>
                        <span>Découvrir notre univers ↗</span>
                    </div>
                </a>

                <a href="<?= base_url('/index.php/actualite/afficher/1') ?>"
                   class="menu-carte carte-actualites">

                    <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=500"
                         alt="Exposition artistique">

                    <span class="carte-numero">02</span>
                    <div class="carte-infos">
                        <h3>Actualités</h3>
                        <span>Nos dernières nouvelles ↗</span>
                    </div>
                </a>

                <a href="<?= base_url('/index.php/livre_or/afficher') ?>"
                   class="menu-carte carte-livre">

                    <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?w=500"
                         alt="Livre et écriture">

                    <span class="carte-numero">03</span>
                    <div class="carte-infos">
                        <h3>Livre d'or</h3>
                        <span>Vos impressions ↗</span>
                    </div>
                </a>


                
                <a href="<?= site_url('galerie') ?>"
                class="menu-carte carte-galerie">

                    <img src="https://images.unsplash.com/photo-1577083552431-6e5fd01aa342?w=500"
                        alt="Galerie des œuvres">

                    <span class="carte-numero">04</span>
                    <div class="carte-infos">
                        <h3>Galerie des œuvres</h3>
                        <span>Découvrir les œuvres ↗</span>
                    </div>
                </a>




                <a href="<?= site_url('admin/afficher') ?>"
                   class="menu-carte carte-admin">

                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=500"
                         alt="Espace de travail">

                    <span class="carte-numero">04</span>
                    <div class="carte-infos">
                        <h3>Administration</h3>
                        <span>Espace de gestion ↗</span>
                    </div>
                </a>

            </div>

            <div class="menu-pied">
                <span>PARIS EXPO — ART & CULTURE</span>
                <span>EXPLOREZ • DÉCOUVREZ • PARTAGEZ</span>
            </div>

        </div>
    </div>

</nav>







<script>
document.addEventListener('DOMContentLoaded', function () {

    const ouvrir = document.getElementById('ouvrirMenu');
    const fermer = document.getElementById('fermerMenu');
    const panneau = document.getElementById('panneauMenu');

    function ouvrirMenu() {
        panneau.classList.add('menu-actif');
        ouvrir.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function fermerMenu() {
        panneau.classList.remove('menu-actif');
        ouvrir.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    ouvrir.addEventListener('click', ouvrirMenu);
    fermer.addEventListener('click', fermerMenu);

    panneau.addEventListener('click', function(e) {
        if (e.target === panneau) {
            fermerMenu();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            fermerMenu();
        }
    });

});
</script>

