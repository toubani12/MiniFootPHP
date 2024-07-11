<?php

include('elements/header.php');
?>

    <div class="container">
        <h2>Liste des réservations validées</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Utilisateur</th>
                    <th>Nombre de participants</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('elements/connect.php');
                $query="SELECT r.id_reservation,r.id_utilisateur as r_id_user,d.id_utilisateur as d_id_user, date, heur_debut, heur_fin, u.nom, u.prenom, COUNT(*) AS num
                            FROM users u
                            JOIN reservation r ON u.id_user = r.id_utilisateur
                            JOIN demandes d ON d.id_reservation = r.id_reservation
                            WHERE etat = 1
                            GROUP BY r.id_reservation;";
                $result=mysqli_query($connection,$query);
                

                
                


                while($reservation = mysqli_fetch_assoc($result)){
                    $number=intval($reservation['num'] );
                    $querytest="select * from demandes where id_reservation=".$reservation['id_reservation']." and id_utilisateur=".$_SESSION['id'];
                    
                    
                    echo '<tr>';
                    echo '<td>' . $reservation['date'] . '</td>';
                    echo '<td>' . $reservation['heur_debut'] . '</td>';
                    echo '<td>' . $reservation['heur_fin'] . '</td>';
                    echo '<td>' . $reservation['nom'] ." ". $reservation['prenom'] .'</td>';
                    echo '<td>' . $reservation['num'] . '</td>';
                    
                    if($_SESSION['admin']==1){
                        echo '<td><a href="annuler_reservation.php?id=' . $reservation['id_reservation'] . '">annuler</a> | <a href="listesDemande.php?id=' . $reservation['id_reservation'] . '">Demandes</a></td>';

                    }else{ if($test=mysqli_query($connection,$querytest)){ 
                            if(mysqli_fetch_assoc($test) && !($reservation['r_id_user']==$_SESSION['id'])){
                                echo '<td><a href="retirer.php?id=' . $reservation['id_reservation'] . '">Retiré</a></td>';
                            }else if($number<10 && !($reservation['d_id_user']==$_SESSION['id']) && !($reservation['r_id_user']==$_SESSION['id'])){
                                echo '<td><a href="demande.php?id=' . $reservation['id_reservation'] . '">Participer</a></td>';
                            }else{
                                echo '<td><a href="annuler_reservation.php?id=' . $reservation['id_reservation'] . '">annuler</a> | <a href="listesDemande.php?id=' . $reservation['id_reservation'] . '&?dd=' . $reservation['r_id_user'] . '">Demandes</a></td>';
                                
                                
                            } 
    
                            
                            
                        }
                                
                            
                          
                            
                        }}
                    echo '</tr>';
                
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
