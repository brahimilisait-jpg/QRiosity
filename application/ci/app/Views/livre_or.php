
<div class="livre-fond">
    <div class="livre-scene">
        <div class="livre-lueur livre-lueur-gauche"></div>
        <div class="livre-lueur livre-lueur-droite"></div>

        <div class="livre-entete">
            <span class="livre-entete-ornement">✦</span>
            <span>PARIS EXPO · SOUVENIRS DE VISITE</span>
            <span class="livre-entete-ornement">✦</span>
        </div>

        <div class="livre-couverture">
            <div class="livre-couverture-cadre"></div>
            <span class="livre-coin livre-coin-haut-gauche">❦</span>
            <span class="livre-coin livre-coin-haut-droit">❦</span>
            <span class="livre-coin livre-coin-bas-gauche">❦</span>
            <span class="livre-coin livre-coin-bas-droit">❦</span>

            <div class="livre-pages">
                <div class="livre-reliure"></div>
                <div class="livre-ruban"></div>

                <!-- PAGE DE GAUCHE -->
                <section class="livre-page-gauche">
                    <div class="livre-medaille"><i class="fas fa-landmark"></i></div>
                    <p class="livre-logo">PARIS <span>EXPO</span></p>

                    <div class="livre-ornement-ligne">
                        <span></span><b>❦</b><span></span>
                    </div>

                    <h1 class="livre-grand-titre">Le Livre d'Or</h1>

                    <div class="livre-ornement-ligne">
                        <span></span><b>❧</b><span></span>
                    </div>

                    <p class="livre-sous-titre-gauche">VOS SOUVENIRS, NOTRE HISTOIRE</p>

                    <div class="livre-illustration-cadre">
                        <img
                            class="livre-illustration"
                            src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=85"
                            alt="Vue architecturale de Paris"
                        >
                    </div>

                    <h2 class="livre-invitation">Partagez votre expérience, vos émotions</h2>
                    <p class="livre-introduction">
                        Chaque visite est une histoire. Laissez quelques mots
                        pour partager vos impressions et garder une trace
                        de votre passage à Paris Expo.
                    </p>

                    <a class="livre-bouton-ajout" href="<?= site_url('livre_or/ajouter') ?>">
                        <i class="fas fa-feather-alt"></i>
                        <span>Laisser un commentaire</span>
                    </a>

                    <p class="livre-signature">Merci de faire partie de notre histoire.</p>
                </section>

                <!-- PAGE DE DROITE -->
                <section class="livre-page-droite">
                    <header class="livre-page-entete">
                        <span class="livre-page-numero">
                            TÉMOIGNAGES · <?= esc((string) count($commentaires ?? [])) ?> MESSAGES
                        </span>

                        <h2 class="livre-titre-messages">Les messages de nos visiteurs</h2>
                        <p class="livre-sous-titre">QUELQUES MOTS PRÉCIEUX</p>

                        <div class="livre-ornement-ligne">
                            <span></span><b>❦</b><span></span>
                        </div>
                    </header>

                    <?php if (!empty($commentaires)) : ?>
                        <div class="livre-liste-commentaires">
                            <?php foreach ($commentaires as $index => $commentaire) : ?>
                                <article class="livre-commentaire">
                                    <span class="livre-commentaire-numero">
                                        <?= esc((string) ($index + 1)) ?>
                                    </span>

                                    <span class="livre-guillemet">“</span>

                                    <p class="livre-texte">
                                        « <?= esc($commentaire['cmt_texte'] ?? '') ?> »
                                    </p>

                                    <div class="livre-commentaire-bas">
                                        <span>
                                            <i class="fas fa-envelope"></i>
                                            <?= esc($commentaire['vis_email'] ?? '') ?>
                                        </span>

                                        <span>
                                            <i class="fas fa-calendar-alt"></i>
                                            <?= esc($commentaire['cmt_date'] ?? '') ?>
                                        </span>
                                    </div>

                                    <span class="livre-feuille livre-feuille-gauche">❧</span>
                                    <span class="livre-feuille livre-feuille-droite">❧</span>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <div class="livre-message-vide">
                            <span class="livre-message-icone">❦</span>
                            <h3>Les premières pages restent à écrire…</h3>
                            <p>
                                Soyez la première personne à partager un souvenir
                                de votre visite.
                            </p>
                        </div>
                    <?php endif; ?>

                    <div class="livre-bas-page">
                        <span></span> PARIS EXPO <span></span>
                    </div>
                </section>

                <div class="livre-tranche"></div>
            </div>

            <div class="livre-sceau">PARIS<br>EXPO</div>
        </div>

        <p class="livre-mention">
            UN SOUVENIR À CONSERVER · UN INSTANT À PARTAGER
        </p>
    </div>
</div>
