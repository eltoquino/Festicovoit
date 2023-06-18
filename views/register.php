<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="process_register.php">
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label>Login:</label>
        <input type="text" name="login" required><br>
        <label>Mot de passe:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>