<!DOCTYPE html>
<html>
<head>
    <title>Création d'un festivalier</title>
</head>
<body>
    <h1>Création d'un festivalier</h1>
    <form method="post" action="process_create_festivalgoer.php">
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label>Date de présence:</label>
        <input type="date" name="date de présence" required><br>
        <label>Login:</label>
        <input type="text" name="login" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Créer">
    </form>
</body>
</html>