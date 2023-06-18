<!DOCTYPE html>
<html>
<head>
    <title>Liste des festivals</title>
</head>
<body>
    <h1>Liste des festivals</h1>
    <?php foreach ($festivals as $festival) : ?>
        <h3><?= $festival['nom'] ?></h3>
        <p>Date: <?= $festival['date'] ?></p>
        <p>Localisation: <?= $festival['localisation'] ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>