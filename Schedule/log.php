<?php
session_start();

include 'connect.php';

$usmail = htmlspecialchars(trim($_POST['mail']));
$pass = htmlspecialchars(trim($_POST['pass']));

$_SESSION['mail'] = htmlspecialchars(trim($_POST['mail']));
$_SESSION['pass'] = htmlspecialchars(trim($_POST['pass']));

$query = "SELECT * FROM `users` WHERE `mail`='$usmail'";
$result = mysqli_query($conn,$query);
$row = $result->fetch_assoc();
$hashpass = $row['pass'];
$Fname = $row['Fname'];
$Lname = $row['Lname'];
$group = $row['group'];

/*
$Fname = htmlspecialchars(trim($_POST['Fname']));
$Lname = htmlspecialchars(trim($_POST['Lname']));
$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
$group = htmlspecialchars(trim($_POST['group']));
$pass = htmlspecialchars(trim($_POST['pass']));
*/

if(password_verify($pass,$hashpass)){
    $_SESSION['auth'] = true;
    $_SESSION['mail'] = $usmail;

    $_SESSION['Fname'] = $Fname;
    $_SESSION['Lname'] = $Lname;
    $_SESSION['group'] = $group;

    header('Location: /');
} else {
    $_SESSION['error'] = 'Введена неверная почта или пароль';
    header('Location: ../login.php');
}

?>
