<?php
include('elements/connect.php');
$id=$_GET['id'];
$query="delete from reservation  where id_reservation = '$id'";
$result=mysqli_query($connection,$query);

header('location:liste-nonvalide.php');


?>