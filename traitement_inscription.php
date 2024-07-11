<?php
include('elements/connect.php');
session_start();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naiss = $_POST['date_naiss'];
$cin = $_POST['cin'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$password = $_POST['password'];

$query="insert into users (nom,prenom,cin,date_naiss,email,password,tel) values ('$nom','$prenom',$cin,'$date_naiss','$email',md5('$password'),$tel)";
if($result=(mysqli_query($connection,$query))){
$_SESSION['id']=mysqli_insert_id($connection);
$_SESSION['admin']=0;
setcookie('id', $_SESSION['id'], time() + (86400 * 30), '/');
setcookie('admin', 0, time() + (86400 * 30), '/');

header('location:index.php');
}


?>