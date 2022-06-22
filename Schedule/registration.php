<?php
  session_start();
  $usname = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_registration.css">
    <link href="https://fonts.googleapis.com/css2?
    family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=PT+Sans+Narrow:wght@400;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <title> Регистрация </title>
</head>

<body>
    <div class="parents">
        <div class="registration">
            <?php
                if($_SESSION['error']){
                    echo'<div class="error"> ' . $_SESSION['error'] . '</div>';
                }
            ?>
            <div class="reg_zagolovok"><b>Регистрация</b></div>
            <form action="reg.php" method="post">
                <div class="name_reg" style="top: -20px;"><b>Имя:</b></div>
                <input  name="Fname" maxlength="10" class="col-75" type="text" placeholder="Иван" style="top: -20px;" required>

                <div class="name_reg" style="top: 90px;"><b>Фамилия:</b></div>
                <input  name="Lname" maxlength="15" class="col-75" type="text" placeholder="Иванов"  style="top: 90px;" required>

                <div class="name_reg" style="top: 200px;"><b>Почта:</b></div>
                <input  name="mail" class="col-75" type="email" placeholder="email@gmail.com" style="top: 200px;" required>

                <div class="name_reg" style="top: 310px;"><b>Группа:</b></div>
                <select name="group" class="col-75" style="top: 310px;">
                  <?php
                    include('connect.php');
                    $query = mysqli_query($conn, "SELECT * FROM `groups` ORDER BY `name`");
                    while($group = mysqli_fetch_assoc($query)){
                      $group_id = $group['id'];
                      $query2 = mysqli_query($conn, "SELECT * FROM `subgroups` WHERE '$group_id' = `group_id` ORDER BY `count`");
                      while($subgroup = mysqli_fetch_assoc($query2)){
                        echo '<option value="'.$group['id'].'$'.$subgroup['id'].'">'.$group['name'].' / '.$subgroup['count'].'</option>';
                      }
                    }
                  ?>
                </select>

                <div class="name_reg" style="top: 420px;"><b>Пароль:</b></div>
                <div class="password">
                    <input  name="pass" maxlength="50" type="password" id="password-input" class="col-75" name="lastname" placeholder="********" style="top: 420px;" required>
                </div>

                <label class="checkbox_reg">
                    <input type="checkbox" required/>
                    <div class="checkbox__checkmark" >
                    </div>
                    <div class="checkbox__body">
                        Регистрируясь, вы соглашаетесь с
                        <a href="/privacy_policy.php" style="text-decoration: none;"><b>Политикой конфиденциальности.</b></a>
                    </div>
                </label>
                <input class="button" type="submit" name = "" value="ЗАРЕГИСТРИРОВАТЬСЯ"/>
            </form>
            <div class="question">Уже зерегистрированы?
            <a href="login.php" style="text-decoration: none; "><b>Вход</b></a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$_SESSION['error'] = '';
session_write_close();
?>
