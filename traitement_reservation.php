<?php
session_start();
$id=$_SESSION['id'];
include('elements/connect.php');
$date = $_POST['date'];
$heur_debut = $_POST['heur_debut'];
$temps = strtotime($heur_debut);
$temps += 3600;
$heur_fin = date("H:i:s", $temps);
$query="insert into reservation(id_utilisateur,date,heur_debut,heur_fin) values('$id','$date','$heur_debut','$heur_fin')";
$result=mysqli_query($connection,$query);
$id_reservation=mysqli_insert_id($connection);
$query2="insert into demandes (id_utilisateur,id_reservation) values( '$id','$id_reservation')";
$result2=mysqli_query($connection,$query2);

header('location:index');


?>
