<div class="comptes-container">
<h2><?php echo $titre; ?></h2>

<h2><?php echo $titre; ?></h2>

<h3>Nombre total de comptes : <?= $resultat->total ?></h3>
<?php
if (! empty($logins) && is_array($logins))
{
foreach ($logins as $pseudos)
{
echo "<br />";
echo " -- ";
echo $pseudos["cpt_pseudo"];
echo " -- ";
echo "<br />";
}
}
else {
echo("<h3>Aucun compte pour le moment</h3>");
}
?>

<a href="<?= site_url('accueil/afficher') ?>" class="btn-accueil">
    <i class="fas fa-home"></i> Retour à l'accueil
</a>
</div>