<!DOCTYPE html>
<html>
<head>
    <title>Mise à jour du festival</title>
</head>
<body>
    <h1>Mise à jour du festival</h1>
    <form method="post" action="process_update_festival.php">
        <input type="hidden" name="id" value="<?= $festival['id'] ?>">
        <label>Nom:</label>
        <input type="text" name="name" value="<?= $festival['nom'] ?>" required><br>
        <label>Date:</label>
        <input type="date" name="date" value="<?= $festival['date'] ?>" required><br>
        <label>Localisation:</label>
        <input type="text" name="location" value="<?= $festival['localisation'] ?>" required><br>
        <label>Photo:</label>
        <input type="text" name="photo" value="<?= $festival['photo'] ?>" required><br>
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>