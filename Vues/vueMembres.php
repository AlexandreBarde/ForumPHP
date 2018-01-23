<?php $titre = 'Membres';

ob_start(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-header bg-primary text-white">
    <h1 class="display-3 text-center jumbotron-title">Membres du forum</h1>
</div>

<div class="row">
    <div class="col-xl-6 offset-xl-3 col-md-8 col-lg-8 offset-lg-2 offset-md-2 col-sm-12">
        <table class="table table-hover">
            <tr>
                <th class="text-center table-header">ID</th>
                <th class="text-center table-header">Pseudo</th>
                <th class="text-center table-header">Email</th>
            </tr>

<?php

    while($data = $membres->fetch())
    {

?>         <tr class="table-row" data-href="?action=membre&id=<?= $data['id']; ?>">
                <td class="text-center table-column"><?= $data['id']; ?></td>
                <td class="text-center table-column"><?= $data['pseudo']; ?></td>
                <td class="text-center table-column"><?= $data['email']; ?></td>
            </tr>
<?php
    }

    $membres->closeCursor();

?>

        </table>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
