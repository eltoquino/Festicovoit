<!DOCTYPE html>
<html>
<head>
    <title>Mise à jour du festivalgoer</title>
</head>
<body>
    <h1>Mise à jour du festivalgoer</h1>
    <form method="post" action="process_update_festivalgoer.php">
        <input type="hidden" name="id" value="<?= $festivalier['id'] ?>">
        <label>Nom:</label>
        <input type="text" name="name" value="<?= $festivalier['nom'] ?>" required><br>
        <label>Prénom:</label>
        <input type="text" name="first_name" value="<?= $festivalier['prenom'] ?>" required><br>
        <label>Date de présence:</label>
        <input type="date" name="presence_date" value="<?= $festivalier['date de presence'] ?>" required><br>
        <label>Login:</label>
        <input type="text" name="login" value="<?= $festivalier['login'] ?>" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="password" value="<?= $festivalier['password'] ?>" required><br>
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>