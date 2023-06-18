<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'annonce de véhicule</title>
</head>
<body>
    <h1><?= $announcement['type de vehicule'] ?></h1>
    <p>Places disponibles: <?= $announcement['siege disponible'] ?></p>
    <p>Date de l'aller: <?= $announcement['date de depart'] ?></p>
    <?php if ($announcement['date de retour']) : ?>
        <p>Date du retour: <?= $announcement['date de retour'] ?></p>
    <?php endif; ?>
</body>
</html>