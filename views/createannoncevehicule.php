<!DOCTYPE html>
<html>
<head>
    <title>Création d'une annonce de véhicule</title>
</head>
<body>
    <h1>Création d'une annonce de véhicule</h1>
    <form method="post" action="process_create_vehicle_announcement.php">
        <label>Type de véhicule:</label>
        <input type="text" name="type de vehicle" required><br>
        <label>Places disponibles:</label>
        <input type="number" name="siege disponible" required><br>
        <label>Date de l'aller:</label>
        <input type="date" name="date de depart" required><br>
        <label>Date du retour:</label>
        <input type="date" name="date de retour"><br>
        <input type="submit" value="Créer">
    </form>
</body>
</html>