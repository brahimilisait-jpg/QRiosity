


<div class="container mt-5 mb-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow text-center border-0">

                <div class="card-body p-5">

                    <div class="mb-3">
                        <i class="fas fa-check-circle text-success"
                           style="font-size: 60px;"></i>
                    </div>

                    <h2 class="text-success mb-4">
                        Bravo ! Votre compte a bien été créé !
                    </h2>

                    <p class="fs-5">
                        Le compte suivant a été ajouté :
                    </p>

                    <h3 class="mb-4">
                        <?= esc($le_compte) ?>
                    </h3>

                    <hr>

                    <p class="text-muted">
                        <?= esc($le_message) ?>
                    </p>

                    <p class="fs-4 fw-bold">
                        <?= esc($le_total->total) ?>
                    </p>

                    <p class="text-muted">
                        comptes enregistrés au total.
                    </p>

                    <a href="<?= site_url('compte/creer') ?>"
                       class="btn btn-dark mt-3">
                        Créer un autre compte
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>
