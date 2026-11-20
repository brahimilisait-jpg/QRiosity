<div class="galerie-page">

    <div class="galerie-header">
        <p class="galerie-surtitle">Paris Expo · Collection</p>
        <h2>Galerie des œuvres</h2>

        <p class="galerie-description">
            Découvrez les œuvres et les artistes qui composent notre collection.
            Une invitation à explorer l'art et ses différentes expressions.
        </p>
    </div>

    <?php if (empty($oeuvres)) : ?>

        <div class="galerie-vide">
            Aucune œuvre pour l'instant !
        </div>

    <?php else : ?>

        <div class="galerie-grid">

            <?php foreach ($oeuvres as $oeuvre) : ?>

                <a href="<?= site_url('galerie/' . $oeuvre['oeu_code']) ?>"
                   class="galerie-lien">

                    <article class="galerie-card">

                        <div class="galerie-image-container">
                            <img
                                src="<?= base_url('images/' . esc($oeuvre['oeu_image'])) ?>"
                                alt="<?= esc($oeuvre['oeu_titre']) ?>"
                                class="galerie-image"
                            >
                        </div>

                        <div class="galerie-card-body">

                            <span class="galerie-type">
                                <?= esc($oeuvre['oeu_type']) ?>
                            </span>

                            <h3 class="galerie-titre">
                                <?= esc($oeuvre['oeu_titre']) ?>
                            </h3>

                            <div class="galerie-separator"></div>

                            <p class="galerie-info">
                                <strong>Créateur(s)</strong>
                                <?= esc($oeuvre['createurs'] ?? 'Non renseigné') ?>
                            </p>

                            <p class="galerie-info">
                                <strong>Langues disponibles</strong>
                                <?= esc($oeuvre['langues'] ?? 'Aucune traduction') ?>
                            </p>

                        </div>

                    </article>

                </a>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>