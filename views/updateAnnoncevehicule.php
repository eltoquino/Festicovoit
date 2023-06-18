<!DOCTYPE html>
<html>
<head>
    <title>Mise à jour de l'annonce de véhicule</title>
</head>
<body>
    <h1>Mise à jour de l'annonce de véhicule</h1>
    <form method="post" action="process_update_vehicle_announcement.php">
        <input type="hidden" name="id" value="<?= $announcement['id'] ?>">
        <label>Type de véhicule:</label>
        <input type="text" name="vehicle_type" value="<?= $announcement['type du vehicule'] ?>" required><br>
        <label>Places disponibles:</label>
        <input type="number" name="available_seats" value="<?= $announcement['siege disponible'] ?>" required><br>
        <label>Date de l'aller:</label>
        <input type="date" name="departure_date" value="<?= $announcement['date de depart'] ?>" required><br>
        <label>Date du retour:</label>
        <input type="date" name="return_date" value="<?= $announcement['date de retour'] ?>"><br>
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>