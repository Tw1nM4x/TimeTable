<?php
  session_start();
  include('connect.php');
  $sortType = $_POST['sortType'];
  $sort = $_POST['sort'];
  $_SESSION['sortType']=$sortType;
  $_SESSION['sort']=$sort;
  $_SESSION['sortPrint']=$sort;
  if($sortType == "group"){
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
  }
  if($sortType == "teacher"){
    $query = mysqli_query($conn, "SELECT * FROM `teachers` WHERE `id` = '$sort'");
    $teacher = mysqli_fetch_assoc($query);
    $_SESSION['sortPrint']=$teacher['name'];
  }
  if($sortType == "classroom"){
    $query = mysqli_query($conn, "SELECT * FROM `classroom` WHERE `id` = '$sort'");
    $classroom = mysqli_fetch_assoc($query);
    $_SESSION['sortPrint']=$classroom['label'];
  }
  header('Location: /');
 ?>
