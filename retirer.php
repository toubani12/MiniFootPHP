<?php
session_start();
include('elements/connect.php');
if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==0){
       $id_utilisateur=$_SESSION['id']; 
       $id_reservation=$_GET['id']; 
       $query="DELETE FROM demandes WHERE id_utilisateur=$id_utilisateur and id_reservation = $id_reservation ";
       if($result=(mysqli_query($connection,$query))){
        header('location:index.php');
       }

    }else{
  header('location:index.php');
        
    }}else{
  header('location:index.php');
        
    }