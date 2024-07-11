<?php
session_start();
if(isset($_COOKIE['id'])){
    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['admin']=$_COOKIE['admin'];


}else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">

   
</head>
<body>
<nav class="navbar navbar-expand-lg <?php if($_SESSION['admin']==1){ echo 'navbar-danger bg-danger';}else{ echo 'navbar-dark bg-dark';}?>">
    <a class="navbar-brand" href="index.php">Accueil</a>
    

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <?php

            if($_SESSION['admin']==1){
        ?> 
        <li class="nav-item">
            <a class="nav-link" href="liste-nonValide.php">Liste des réservations non validées</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="reservationAnnule.php">réservations Annules</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">réservations validées</a>
        </li>
        <?php
            }else{
        ?> 
            <li class="nav-item">
                <a class="nav-link" href="reservation.php">Réserver</a>
            </li>
        <?php
            }
        ?> 


            <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">Déconnecter</a>
            </li>
        </ul>
    </div>
</nav>