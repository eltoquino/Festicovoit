<!DOCTYPE html>
<html>
<head>
    <title>Création d'un festival</title>
</head>
<body>
    <h1>Création d'un festival</h1>
    <form method="post" action="process_create_festival.php">
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Date:</label>
        <input type="date" name="date" required><br>
        <label>Localisation:</label>
        <input type="text" name="localisation" required><br>
        <label>Photo:</label>
        <input type="text" name="photo" required><br>
        <input type="submit" value="Créer">
    </form>
</body>
</html>