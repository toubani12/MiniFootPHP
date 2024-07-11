<?php
include('elements/connect.php');
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$query="select * from users where email='$email' and password=md5('$password')";
$result=mysqli_query($connection,$query);
if ($row=mysqli_fetch_assoc($result)) {
    $_SESSION['id']=$row['id_user'];
    $_SESSION['admin']=$row['admin'];
    setcookie('id', $_SESSION['id'], time() + (86400 * 30), '/');
    setcookie('admin', $row['admin'], time() + (86400 * 30), '/');

    header('location:index.php');
} else {
    
    $_SESSION['error']="Email ou mot de passe incorrect.";
    header('location:login.php');

}
?>
