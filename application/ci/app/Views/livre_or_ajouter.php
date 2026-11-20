<h2 class="text-center mt-4">Laisser un commentaire</h2>

<div class="container mt-4 mb-5">

    <form action="<?= site_url('livre_or/enregistrer') ?>" method="post">

        <?= csrf_field() ?>
        <?= session()->getFlashdata('erreur') ?>

        <h4>Informations du ticket</h4>

        <div class="mb-3">
            <label>Matricule du ticket</label>
            <input type="text" name="tic_matricule"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mot de passe du ticket</label>
            <input type="password" name="tic_mot_de_passe"
                   class="form-control" required>
        </div>

        <hr>

        <h4>Informations du visiteur</h4>

        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="vis_nom"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Prénom</label>
            <input type="text" name="vis_prenom"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Département</label>
            <input type="text" name="vis_departement"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Pays</label>
            <input type="text" name="vis_pays"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="vis_email"
                   class="form-control" required>
        </div>

        <hr>

        <h4>Votre commentaire</h4>

        <div class="mb-3">
            <textarea name="cmt_texte" class="form-control"
                      rows="5" placeholder="Écrivez votre commentaire..."
                      required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Envoyer mon commentaire
        </button>

        <a href="<?= site_url('livre_or') ?>" class="btn btn-secondary">
            Retour
        </a>

    </form>

</div>