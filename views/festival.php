<!DOCTYPE html>
<html>
<head>
    <title>Détails du festival</title>
</head>
<body>
    <h1><?= $festival['name'] ?></h1>
    <p>Date: <?= $festival['date'] ?></p>
    <p>Localisation: <?= $festival['location'] ?></p>
    <img src="<?= $festival['photo'] ?>" alt="Photo du festival">
</body>
</html>