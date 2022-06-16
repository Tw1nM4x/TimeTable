<?php
  session_start();
  $_SESSION['week_numder'] -= 1;
  header('Location: /');
?>

