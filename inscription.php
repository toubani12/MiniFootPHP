<?php
session_start();
if(isset($_SESSION['id'])||isset($_COOKIE['id'])){
    $_SESSION['id']=$_COOKIE['id'];
    $_SESSION['admin']=$_COOKIE['admin'];
    header('location:index.php');

}
?>
<!DOCTYPE html>
<html class="my-custom-background">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>inscription</title>
</head>
<body >
<div class="container">
        <h2>Inscription</h2>
        <form method="POST" action="traitement_inscription.php" >
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="cin">CIN:</label>
                <input type="text" class="form-control" id="cin" name="cin" required>
            </div>
            <div class="form-group">
                <label for="tel">TELEPHONE:</label>
                <input type="tel" class="form-control" id="tel" name="tel" required>
            </div>
            <div class="form-group">
                <label for="date_naiss">Date de naissance:</label>
                <input type="date" class="form-control" id="date_naiss" name="date_naiss" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <a href="login.php" class="btn btn-success">ou Se connecter</a>

        </form>
    </div>
</body>
</html>