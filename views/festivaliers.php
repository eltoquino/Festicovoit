<!DOCTYPE html>
<html>
<head>
    <title>Liste des festivaliers</title>
</head>
<body>
    <h1>Liste des festivaliers</h1>
    <?php foreach ($festivalgiers as $festivalier) : ?>
        <h3><?= $festivalier['nom'] ?> <?= $festivalier['prenom'] ?></h3>
        <p>Date de présence: <?= $festivalier['date de presence'] ?></p>
        <p>Login: <?= $festivalier['login'] ?></p>
        <p>Mot de passe: <?= $festivalier['password'] ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>