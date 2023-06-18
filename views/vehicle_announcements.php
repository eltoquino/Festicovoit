<!DOCTYPE html>
<html>
<head>
    <title>Liste des annonces de véhicules</title>
</head>
<body>
    <h1>Liste des annonces de véhicules</h1>
    <?php foreach ($announcements as $announcement) : ?>
        <h3><?= $announcement['type de vehicule'] ?></h3>
        <p>Places disponibles: <?= $announcement['siege disponible'] ?></p>
        <p>Date de l'aller: <?= $announcement['date de depart'] ?></p>
        <?php if ($announcement['date de depart']) : ?>
            <p>Date du retour: <?= $announcement['date de retour'] ?></p>
        <?php endif; ?>
        <hr>
    <?php endforeach; ?>
</body>
</html>