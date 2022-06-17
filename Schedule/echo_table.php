
<?php
    include 'connect.php';
    session_start();
    /*
    Открывает таблицу TimeTable, пробегаемся по id,
    если date совпала с $_SESSION['select_monday']..., то  
    смотрим bell_id, по нему переходим в
    базу данных bell
    если start = ... то вставляем в ...

    Вставляем в нашу ячейку
    $name_предмета
    $subject_type
    $teacher_name
    $groups
    $subgroups

    
    */
    $query = mysqli_query($conn, "SELECT * FROM `recipes` WHERE `id`=$id");
    $recipe = mysqli_fetch_assoc($query);

    $user = $recipe['author'];
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `mail`='$user'");
    $author = mysqli_fetch_assoc($query);

    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `mail` = '$mail'");
    $user = mysqli_fetch_assoc($query);
    $favoriteRecipes = $user['favoriteRecipes'];
    if(strpos($favoriteRecipes, ",".$id.",") === false) $like = 0;
    else $like = 1;

    echo '
    <div class = "avtor">автор:</div>
    <img src="images/recipes/плашка-18.png" class = "fireAva">
    <img src="images/avatars/'.$author['avatar'].'" class = "boxAva">
    <div class = "avtorName">'.$author['name'].'</div>';
?>