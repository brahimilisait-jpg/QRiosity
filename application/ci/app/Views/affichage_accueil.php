
<div class="accueil-page">

    <!-- GRANDE BANNIÈRE -->
    <section class="accueil-hero">

        <div class="accueil-hero-fond"></div>
        <div class="accueil-hero-filtre"></div>

        <div class="accueil-hero-contenu">

            <div class="accueil-surtitre">
                <span></span>
                BIENVENUE À PARIS EXPO
                <span></span>
            </div>

            <h1><?= esc($presentation->pre_titre) ?></h1>

            <p><?= esc($presentation->pre_descr) ?></p>

            <a href="<?= base_url('/index.php/presentation/afficher') ?>"
               class="accueil-bouton">
                DÉCOUVRIR L'EXPOSITION
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

        <div class="accueil-hero-bas">
            <span>ART & CULTURE</span>
            <span>01 — PARIS EXPO</span>
        </div>

    </section>


    <!-- VERNISSAGE -->
    <section class="accueil-vernissage container">

        <div class="accueil-section-numero">
            <span>01</span>
            <i></i>
            PROCHAIN ÉVÉNEMENT
        </div>

        <div class="vernissage-bloc">

            <div class="vernissage-description">
                <span>À VOS AGENDAS</span>
                <h2>Le vernissage</h2>
                <p>
                    Retrouvez-nous pour découvrir notre exposition
                    et partager un moment autour de l'art.
                </p>
            </div>

            <div class="vernissage-compte">

                <?php
                $date1 = new DateTime();
                $date2 = new DateTime($presentation->pre_date_verni);

                if ($date1 < $date2) :
                ?>

                    <strong><?= $date1->diff($date2)->days ?></strong>
                    <span>JOURS RESTANTS</span>

                <?php else : ?>

                    <strong class="vernissage-passe">À bientôt !</strong>
                    <span>LE VERNISSAGE A DÉJÀ EU LIEU</span>

                <?php endif; ?>

                <div class="vernissage-date">
                    <i class="far fa-calendar-alt"></i>
                    <?= esc($date2->format('d/m/Y')) ?>
                </div>

            </div>

        </div>

    </section>


    
<!-- ACTUALITÉS -->
<section class="accueil-actualites">

    <div class="container">

        <div class="actualites-entete">

            <div>
                <span class="actualites-surtitre">RESTEZ INFORMÉS</span>
                <h2>Les actualités</h2>
                <p>
                    Retrouvez toutes les nouvelles de notre exposition.
                </p>
            </div>

            <span class="actualites-grand-numero">02</span>

        </div>


        <?php if (!empty($actualites)) : ?>

            <div class="tableau-actualites">

                <table class="table-actualites">

                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Actualité</th>
                            <th>Auteur</th>
                            <th>Date de publication</th>
                            <th>Découvrir</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($actualites as $index => $actu) : ?>

                            <tr>

                                <td class="numero-actualite">
                                    <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                </td>

                                <td class="titre-actualite">
                                    <?= esc($actu['act_titre']) ?>
                                </td>

                                <td>
                                    <i class="far fa-user"></i>
                                    <?= esc($actu['cpt_pseudo']) ?>
                                </td>

                                <td>
                                    <i class="far fa-calendar"></i>
                                    <?= esc($actu['act_date_pub']) ?>
                                </td>

                                <td>
                                    <a href="<?= site_url('actualite/afficher/' . $actu['act_id']) ?>">
                                        Découvrir
                                    </a>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        <?php else : ?>

            <div class="actualites-vide">
                <i class="far fa-newspaper"></i>
                <h3>Aucune actualité pour l'instant !</h3>
            </div>

        <?php endif; ?>

    </div>

</section>


</div>
