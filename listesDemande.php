<?php
include('elements/header.php');
?>

<div class="container">
    <h2>Demandes de participation</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('elements/connect.php');

            // Vérifier si l'utilisateur est administrateur
            if ($_SESSION['admin'] == 1 || isset($_GET['id'])) {
                // Vérifier si l'ID de réservation est passé en paramètre
                if (isset($_GET['id'])) {
                    $idReservation = $_GET['id'];

                    // Récupérer les demandes de participation pour la réservation spécifique
                    $query = "SELECT d.id_demande, u.nom, u.prenom
                            FROM demandes d
                            LEFT JOIN users u ON d.id_utilisateur = u.id_user
                            WHERE d.id_reservation = '$idReservation'";
                    $result = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['nom'] . ' ' . $row['prenom'] . '</td>';
                        echo '<td><a href="retirer.php?id=' . $row['id_demande'] . '">Retirer</a>';
                        echo '</tr>';
                    }
                } else {
                    header('location:index.php');
                }
            } else {
                header('location:index.php');
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
