<?php
include('elements/header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Réservation du terrain</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Réservation du terrain</h2>
        <form method="POST" action="traitement_reservation.php">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            
            <div class="form-group">
                <label for="heur_debut">Heure de début:</label>
                <input type="time" class="form-control" id="heur_debut" name="heur_debut" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
