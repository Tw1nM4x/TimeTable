<?php
  session_start();

    if($_SESSION['week_numder'] == 1){
        $_SESSION['selected_day'] = "13 – 18 сент. 2021 г.";
        $_SESSION['selected_week'] = "1 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 2){
        $_SESSION['selected_day'] = "20 – 25 сент. 2021 г.";
        $_SESSION['selected_week'] = "2 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 3){
        $_SESSION['selected_day'] = "27 сент. – 2 окт. 2021 г.";
        $_SESSION['selected_week'] = "3 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 4){
        $_SESSION['selected_day'] = "4 – 9 окт. 2021 г.";
        $_SESSION['selected_week'] = "4 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 5){
        $_SESSION['selected_day'] = "11 – 16 окт. 2021 г.";
        $_SESSION['selected_week'] = "5 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 6){
        $_SESSION['selected_day'] = "18 – 23 окт. 2021 г.";
        $_SESSION['selected_week'] = "6 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 7){
        $_SESSION['selected_day'] = "25 – 30 окт. 2021 г.";
        $_SESSION['selected_week'] = "7 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 8){
        $_SESSION['selected_day'] = "1 – 6 нояб. 2021 г.";
        $_SESSION['selected_week'] = "8 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 9){
        $_SESSION['selected_day'] = "8 – 13 нояб. 2021 г.";
        $_SESSION['selected_week'] = "9 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 10){
        $_SESSION['selected_day'] = "15 – 20 нояб. 2021 г.";
        $_SESSION['selected_week'] = "10 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 11){
        $_SESSION['selected_day'] = "22 – 27 нояб. 2021 г.";
        $_SESSION['selected_week'] = "11 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 12){
        $_SESSION['selected_day'] = "29 нояб. – 4 дек. 2021 г.";
        $_SESSION['selected_week'] = "12 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 13){
        $_SESSION['selected_day'] = "6 – 11 дек. 2021 г.";
        $_SESSION['selected_week'] = "13 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 14){
        $_SESSION['selected_day'] = "13 – 18 дек. 2021 г.";
        $_SESSION['selected_week'] = "14 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 15){
        $_SESSION['selected_day'] = "20 – 25 дек. 2021 г.";
        $_SESSION['selected_week'] = "15 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 16){
        $_SESSION['selected_day'] = "27 дек. 2021 – 1 янв. 2022 г.";
        $_SESSION['selected_week'] = "16 неделя (чет.)";
    }
    if($_SESSION['week_numder'] == 17){
        //КАНИКУЛЫ НЕТ УЧЕБЫ
        $_SESSION['selected_day'] = "3 – 8 янв. 2022 г. ";
        $_SESSION['selected_week'] = "17 неделя (нечет.)";
    }
    if($_SESSION['week_numder'] == 18){
        $_SESSION['selected_day'] = "10 – 15 янв. 2022 г.";
        $_SESSION['selected_week'] = "18 неделя (чет.)";
    }
?>