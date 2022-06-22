<?php
session_start();
include 'connect.php';


$Fname = htmlspecialchars(trim($_POST['Fname']));
$Lname = htmlspecialchars(trim($_POST['Lname']));
$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
$pass = htmlspecialchars(trim($_POST['pass']));

$_SESSION['Fname'] = htmlspecialchars(trim($_POST['Fname']));
$_SESSION['Lname'] = htmlspecialchars(trim($_POST['Lname']));
$_SESSION['mail'] = htmlspecialchars(trim($_POST['mail']));
$sort = htmlspecialchars(trim($_POST['group']));
$_SESSION['pass'] = htmlspecialchars(trim($_POST['pass']));

$_SESSION['sort']=$sort;
$_SESSION['sortType']="group";
$array = explode('$', $sort);
$groupSelect = $array[0];
$subGroupSelect = $array[1];
$_SESSION['groupSelect']=$groupSelect;
$_SESSION['subGroupSelect']=$subGroupSelect;
$query = mysqli_query($conn, "SELECT * FROM `groups` WHERE '$groupSelect' = `id`");
$group = mysqli_fetch_assoc($query);
$query = mysqli_query($conn, "SELECT * FROM `subgroups` WHERE '$subGroupSelect' = `id`");
$subgroup = mysqli_fetch_assoc($query);
$_SESSION['sortPrint']=$group['name'].' / '.$subgroup['count'];

$_SESSION['group'] = $_SESSION['sortPrint'];
$_SESSION['saveSort'] = $sort;
$_SESSION['saveSortType'] = "group";
$group = $_SESSION['sort'];

$_SESSION['avatar'] = "0";
$avatar = $_SESSION['avatar'];

if(mb_strlen($Fname) < 2 || mb_strlen($Fname) > 10){
    $_SESSION['error'] = 'Имя должно быть от 2 до 10 символов';
    header('Location: /registration.php');
    exit();
}

if(mb_strlen($Lname) < 2 || mb_strlen($Lname) > 15){
    $_SESSION['error'] = 'Имя должно быть от 2 до 15 символоа';
    header('Location: /registration.php');
    exit();
}

$sql  = "SELECT * FROM `users` WHERE `mail` = '$mail'";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()) {
    if($row){
        $_SESSION['error'] = 'Вы уже зарегистрированы!';
        header('Location: /registration.php');
        exit();
      }
}

if(mb_strlen($pass) < 5 || mb_strlen($pass) > 20){
    $_SESSION['error'] = 'Пароль должен быть от 5 до 20 символов';
    header('Location: /registration.php');
    exit();
}

$hashpass = password_hash($pass, PASSWORD_BCRYPT);

$token = password_hash($mail, PASSWORD_BCRYPT);;

$sql = "INSERT INTO `users` (`Fname`, `Lname`, `mail`, `pass`, `group`) VALUES
('$Fname', '$Lname', '$mail', '$hashpass', '$group')";

$_SESSION['auth'] = true;

$_SESSION['week_numder'] = 5;

$conn->query($sql);
$conn->close();
header('Location: /');
?>
