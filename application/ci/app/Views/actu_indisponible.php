
<div class="actualite-erreur-container">

    <div class="actualite-erreur-carte">

        <div class="actualite-erreur-icone">
            <i class="fas fa-eye-slash"></i>
        </div>

        <span class="actualite-erreur-sur-titre">PARIS EXPO</span>

        <h1>Actualité indisponible</h1>

        <div class="actualite-erreur-ornement">
            <span></span> ❦ <span></span>
        </div>

        <p>
            <?= esc($message) ?>
        </p>

        <a href="<?= site_url('actualite/afficher') ?>"
           class="actualite-erreur-bouton">
            <i class="fas fa-arrow-left"></i>
            Retour aux actualités
        </a>

    </div>

</div>
