<main style="display:block; margin-top:150px !important; margin-bottom:150px !important; padding:50px; background:#f4f0e9;">

  
<?php if (isset($news) && $news !== null) : ?>

        <section class="actualite-hero">

            <div class="actualite-decoration actualite-decoration-1"></div>
            <div class="actualite-decoration actualite-decoration-2"></div>

            <div class="actualite-hero-contenu">

                <span class="actualite-surtitre">
                    PARIS EXPO — JOURNAL CULTUREL
                </span>

                <span class="actualite-numero">
                    N° <?= esc($news->act_id) ?>
                </span>

                <h1><?= esc($news->act_titre) ?></h1>

                <div class="actualite-trait"></div>

                <p class="actualite-date">
                    PUBLIÉ LE <?= esc($news->act_date_pub) ?>
                </p>

            </div>

            <div class="actualite-hero-bas">
                <span>ART · CULTURE · HISTOIRE</span>
                <span>PARIS, FRANCE</span>
            </div>

        </section>

        <section class="actualite-corps">

            <div class="actualite-corps-entete">
                <span>01 — À LA UNE</span>
                <span>PARIS EXPO</span>
            </div>

            <div class="actualite-texte">
                <span class="actualite-guillemet">“</span>

                <?= nl2br(esc($news->act_texte_news)) ?>

            </div>

            <div class="actualite-signature">
                <span></span>
                L'ÉQUIPE PARIS EXPO
                <span></span>
            </div>

        </section>

        <div class="actualite-navigation">
            <a href="<?= site_url('/') ?>">
                ← RETOUR À L'ACCUEIL
            </a>
        </div>

    <?php else : ?>

        <p>Pas d'actualité !</p>

    <?php endif; ?>

</main>