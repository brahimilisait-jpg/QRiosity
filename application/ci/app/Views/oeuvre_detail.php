<div class="galerie-page">

    <?php if (empty($oeuvre)) : ?>

        <div class="galerie-vide">
            Aucune œuvre connue !
        </div>

    <?php else : ?>

        <div class="galerie-header">
            <p class="galerie-surtitle">Paris Expo · Collection</p>
            <h2><?= esc($oeuvre['oeu_titre']) ?></h2>
        </div>

        <div class="galerie-detail">

            <div class="galerie-detail-image">
                <img
                    src="<?= base_url('images/' . esc($oeuvre['oeu_image'])) ?>"
                    alt="<?= esc($oeuvre['oeu_titre']) ?>"
                >
            </div>

            <div class="galerie-detail-infos">

                <p class="galerie-type">
                    <?= esc($oeuvre['oeu_type']) ?>
                </p>

                <h3>Description</h3>

                <p>
                    <?= nl2br(esc($oeuvre['oeu_texte'])) ?>
                </p>

                <div class="galerie-separator"></div>

                <h3>Exposant(s)</h3>

                <p>
                    <?= esc($oeuvre['createurs'] ?? 'Non renseigné') ?>
                </p>

                <a href="<?= site_url('galerie') ?>" class="galerie-retour">
                    Retour à la galerie
                </a>

            </div>

        </div>

    <?php endif; ?>

</div>