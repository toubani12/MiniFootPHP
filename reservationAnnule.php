<?php
include('elements/header.php');
?>
    <div class="container" >
        <h2>Liste des réservations Annulées</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Utilisateur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('elements/connect.php');
                $query="SELECT id_reservation, date, heur_debut, heur_fin, CONCAT(users.nom, ' ', users.prenom) AS cnom FROM users JOIN reservation ON users.id_user = reservation.id_utilisateur WHERE etat = -1;";
                $result=mysqli_query($connection,$query);
                if($result){
                   while($reservation = mysqli_fetch_assoc($result)) {
                    
                
                    echo '<tr>';
                    echo '<td>' . $reservation['date'] . '</td>';
                    echo '<td>' . $reservation['heur_debut'] . '</td>';
                    echo '<td>' . $reservation['heur_fin'] . '</td>';
                    echo '<td>' . $reservation['cnom']  .'</td>';
                    echo '<td>';
                    echo '<a href="valider_reservation.php?id=' . $reservation['id_reservation'] . '">Valider</a> | ';
                    echo '<a href="supReservation.php?id=' . $reservation['id_reservation'] . '">Supprimer</a>';
                    echo '</td>';
                    echo '</tr>';
                }}
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
