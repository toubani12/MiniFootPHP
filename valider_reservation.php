<?php
include('elements/connect.php');
$id=$_GET['id'];
$query="update reservation set etat = 1 where id_reservation = '$id'";
$result=mysqli_query($connection,$query);

header('location:liste-nonvalide.php');


?>