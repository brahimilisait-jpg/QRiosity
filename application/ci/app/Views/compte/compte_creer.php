<div class="container mt-5 mb-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <h2 class="mb-4"><?php echo $titre; ?></h2>

            <?= session()->getFlashdata('error') ?>

            <?php echo form_open('/compte/creer'); ?>
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="cpt_pseudo" class="form-label">Pseudo :</label>
                    <input type="text" name="cpt_pseudo" id="cpt_pseudo" class="form-control">
                    <?= validation_show_error('cpt_pseudo') ?>
                </div>

                <div class="mb-3">
                    <label for="cpt_mot_de_passe" class="form-label">Mot de passe :</label>
                    <input type="password" name="cpt_mot_de_passe" id="cpt_mot_de_passe" class="form-control">
                    <?= validation_show_error('cpt_mot_de_passe') ?>
                </div>

                <button type="submit" name="submit" class="btn btn-dark">
                    Créer un nouveau compte
                </button>

            </form>

        </div>

    </div>

</div>