
<footer class="paris-footer">

    <div class="container">

        <div class="footer-grille">

            <!-- IDENTITÉ PARIS EXPO -->
            <div class="footer-colonne footer-identite">

                <div class="footer-logo">
                    <i class="fas fa-landmark"></i>

                    <div>
                        <h3>PARIS EXPO.</h3>
                        <small>ART · HISTOIRE · CULTURE</small>
                    </div>
                </div>

                <p>
                    Découvrez Paris à travers les décennies et
                    plongez dans l'histoire de la capitale.
                    Une invitation à explorer, admirer et partager.
                </p>

                <div class="footer-devise">
                    « L'art raconte ce que les mots ne disent pas. »
                </div>

            </div>


            <!-- NAVIGATION -->
            <div class="footer-colonne footer-navigation">

                <h4>Explorer</h4>
                <span class="footer-soulignement"></span>

                <a href="#page-top">Accueil</a>

                <a href="<?= base_url('/index.php/presentation/afficher') ?>">
                    Présentation
                </a>

                <a href="<?= base_url('/index.php/actualite/afficher/1') ?>">
                    Actualités
                </a>

                <a href="<?= base_url('/index.php/livre_or') ?>">
                    Livre d'or
                </a>

            </div>


            <!-- COORDONNÉES -->
            <div class="footer-colonne footer-contact">

                <h4>Nous trouver</h4>
                <span class="footer-soulignement"></span>

                <!-- Adresse -->
                <div class="footer-contact-item">

                    <span class="footer-icone">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>

                    <div>
                        <small>NOTRE ADRESSE</small>

                        <p>
                            <?= esc($presentation->pre_rue) ?><br>
                            <?= esc($presentation->pre_code_postal) ?>
                            <?= esc($presentation->pre_ville) ?>
                        </p>
                    </div>

                </div>

                <!-- Téléphone -->
                <div class="footer-contact-item">

                    <span class="footer-icone">
                        <i class="fas fa-phone"></i>
                    </span>

                    <div>
                        <small>TÉLÉPHONE</small>
                        <p><?= esc($presentation->pre_telephone) ?></p>
                    </div>

                </div>

                <!-- Horaires -->
                <div class="footer-contact-item">

                    <span class="footer-icone">
                        <i class="far fa-clock"></i>
                    </span>

                    <div>
                        <small>HORAIRES D'OUVERTURE</small>
                        <p><?= esc($presentation->pre_horaire) ?></p>
                    </div>

                </div>

            </div>

        </div>


        <!-- BAS DU FOOTER -->
        <div class="footer-bas">

            <span>
                &copy; <?= date('Y') ?> PARIS EXPO.
                Tous droits réservés.
            </span>

            <span class="footer-bas-centre">
                CONÇU AUTOUR DE L'ART ET DE LA CULTURE
            </span>

            <a href="#page-top" class="footer-retour">
                RETOUR EN HAUT
                <i class="fas fa-arrow-up"></i>
            </a>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS -->
<script src="<?= base_url('bootstrap/startbootstrap-agency-gh-pages/js/scripts.js') ?>"></script>

<!-- SB Forms JS -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>
