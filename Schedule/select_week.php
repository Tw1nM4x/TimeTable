<?php
  session_start();

    if( (($_SESSION['week_numder']) % 2) == 0){
        $parity = "(чет.)";
    } else {
        $parity = "(нечет.)";
    }

    $_SESSION['selected_week'] =$_SESSION['week_numder']." неделя ".$parity;

    if($_SESSION['week_numder'] == 1){
        $_SESSION['selected_day'] = "13 – 18 сент. 2021 г.";
        $_SESSION['select_monday'] = "13.09";
        $_SESSION['select_tuesday']  = "14.09";
        $_SESSION['select_wednesday']  = "15.09";
        $_SESSION['select_thursday']  = "16.09";
        $_SESSION['select_friday']  = "17.09";
        $_SESSION['select_saturday']  = "18.09";
    }
    if($_SESSION['week_numder'] == 2){
        $_SESSION['selected_day'] = "20 – 25 сент. 2021 г.";
        $_SESSION['select_monday'] = "20.09";
        $_SESSION['select_tuesday']  = "21.09";
        $_SESSION['select_wednesday']  = "22.09";
        $_SESSION['select_thursday']  = "23.09";
        $_SESSION['select_friday']  = "24.09";
        $_SESSION['select_saturday']  = "25.09";
    }
    if($_SESSION['week_numder'] == 3){
        $_SESSION['selected_day'] = "27 сент. – 2 окт. 2021 г.";
        $_SESSION['select_monday'] = "27.09";
        $_SESSION['select_tuesday']  = "28.09";
        $_SESSION['select_wednesday']  = "29.09";
        $_SESSION['select_thursday']  = "30.09";
        $_SESSION['select_friday']  = "1.10";
        $_SESSION['select_saturday']  = "2.10";
    }
    if($_SESSION['week_numder'] == 4){
        $_SESSION['selected_day'] = "4 – 9 окт. 2021 г.";
        $_SESSION['select_monday'] = "4.10";
        $_SESSION['select_tuesday']  = "5.10";
        $_SESSION['select_wednesday']  = "6.10";
        $_SESSION['select_thursday']  = "7.10";
        $_SESSION['select_friday']  = "8.10";
        $_SESSION['select_saturday']  = "9.10";
    }
    if($_SESSION['week_numder'] == 5){
        $_SESSION['selected_day'] = "11 – 16 окт. 2021 г.";
        $_SESSION['select_monday'] = "11.10";
        $_SESSION['select_tuesday']  = "12.10";
        $_SESSION['select_wednesday']  = "13.10";
        $_SESSION['select_thursday']  = "14.10";
        $_SESSION['select_friday']  = "15.10";
        $_SESSION['select_saturday']  = "16.10";
    }
    if($_SESSION['week_numder'] == 6){
        $_SESSION['selected_day'] = "18 – 23 окт. 2021 г.";
        $_SESSION['select_monday'] = "18.10";
        $_SESSION['select_tuesday']  = "19.10";
        $_SESSION['select_wednesday']  = "20.10";
        $_SESSION['select_thursday']  = "21.10";
        $_SESSION['select_friday']  = "22.10";
        $_SESSION['select_saturday']  = "23.10";
    }
    if($_SESSION['week_numder'] == 7){
        $_SESSION['selected_day'] = "25 – 30 окт. 2021 г.";
        $_SESSION['select_monday'] = "25.10";
        $_SESSION['select_tuesday']  = "26.10";
        $_SESSION['select_wednesday']  = "27.10";
        $_SESSION['select_thursday']  = "28.10";
        $_SESSION['select_friday']  = "29.10";
        $_SESSION['select_saturday']  = "30.10";
    }
    if($_SESSION['week_numder'] == 8){
        $_SESSION['selected_day'] = "1 – 6 нояб. 2021 г.";
        $_SESSION['select_monday'] = "1.11";
        $_SESSION['select_tuesday']  = "2.11";
        $_SESSION['select_wednesday']  = "3.11";
        $_SESSION['select_thursday']  = "4.11";
        $_SESSION['select_friday']  = "5.11";
        $_SESSION['select_saturday']  = "6.11";
    }
    if($_SESSION['week_numder'] == 9){
        $_SESSION['selected_day'] = "8 – 13 нояб. 2021 г.";
        $_SESSION['select_monday'] = "8.11";
        $_SESSION['select_tuesday']  = "9.11";
        $_SESSION['select_wednesday']  = "10.11";
        $_SESSION['select_thursday']  = "11.11";
        $_SESSION['select_friday']  = "12.11";
        $_SESSION['select_saturday']  = "13.11";
    }
    if($_SESSION['week_numder'] == 10){
        $_SESSION['selected_day'] = "15 – 20 нояб. 2021 г.";
        $_SESSION['select_monday'] = "15.11";
        $_SESSION['select_tuesday']  = "16.11";
        $_SESSION['select_wednesday']  = "17.11";
        $_SESSION['select_thursday']  = "18.11";
        $_SESSION['select_friday']  = "19.11";
        $_SESSION['select_saturday']  = "20.11";
    }
    if($_SESSION['week_numder'] == 11){
        $_SESSION['selected_day'] = "22 – 27 нояб. 2021 г.";
        $_SESSION['select_monday'] = "22.11";
        $_SESSION['select_tuesday']  = "23.11";
        $_SESSION['select_wednesday']  = "24.11";
        $_SESSION['select_thursday']  = "25.11";
        $_SESSION['select_friday']  = "26.11";
        $_SESSION['select_saturday']  = "27.11";
    }
    if($_SESSION['week_numder'] == 12){
        $_SESSION['selected_day'] = "29 нояб. – 4 дек. 2021 г.";
        $_SESSION['select_monday'] = "29.11";
        $_SESSION['select_tuesday']  = "30.11";
        $_SESSION['select_wednesday']  = "1.12";
        $_SESSION['select_thursday']  = "2.12";
        $_SESSION['select_friday']  = "3.12";
        $_SESSION['select_saturday']  = "4.12";
    }
    if($_SESSION['week_numder'] == 13){
        $_SESSION['selected_day'] = "6 – 11 дек. 2021 г.";
        $_SESSION['select_monday'] = "6.12";
        $_SESSION['select_tuesday']  = "7.12";
        $_SESSION['select_wednesday']  = "8.12";
        $_SESSION['select_thursday']  = "9.12";
        $_SESSION['select_friday']  = "10.12";
        $_SESSION['select_saturday']  = "11.12";
    }
    if($_SESSION['week_numder'] == 14){
        $_SESSION['selected_day'] = "13 – 18 дек. 2021 г.";
        $_SESSION['select_monday'] = "13.12";
        $_SESSION['select_tuesday']  = "14.12";
        $_SESSION['select_wednesday']  = "15.12";
        $_SESSION['select_thursday']  = "16.12";
        $_SESSION['select_friday']  = "17.12";
        $_SESSION['select_saturday']  = "18.12";
    }
    if($_SESSION['week_numder'] == 15){
        $_SESSION['selected_day'] = "20 – 25 дек. 2021 г.";
        $_SESSION['select_monday'] = "20.12";
        $_SESSION['select_tuesday']  = "21.12";
        $_SESSION['select_wednesday']  = "22.12";
        $_SESSION['select_thursday']  = "23.12";
        $_SESSION['select_friday']  = "24.12";
        $_SESSION['select_saturday']  = "25.12";
    }
    if($_SESSION['week_numder'] == 16){
        $_SESSION['selected_day'] = "27 дек. 2021 – 1 янв. 2022 г.";
        $_SESSION['select_monday'] = "27.12";
        $_SESSION['select_tuesday']  = "28.12";
        $_SESSION['select_wednesday']  = "29.12";
        $_SESSION['select_thursday']  = "30.12";
        $_SESSION['select_friday']  = "31.12";
        $_SESSION['select_saturday']  = "1.01";
    }
    if($_SESSION['week_numder'] == 17){
        //КАНИКУЛЫ НЕТ УЧЕБЫ
        $_SESSION['selected_day'] = "3 – 8 янв. 2022 г. ";
        $_SESSION['select_monday'] = "3.01";
        $_SESSION['select_tuesday']  = "4.01";
        $_SESSION['select_wednesday']  = "5.01";
        $_SESSION['select_thursday']  = "6.01";
        $_SESSION['select_friday']  = "7.01";
        $_SESSION['select_saturday']  = "8.01";
    }
    if($_SESSION['week_numder'] == 18){
        $_SESSION['selected_day'] = "10 – 15 янв. 2022 г.";
        $_SESSION['select_monday'] = "10.01";
        $_SESSION['select_tuesday']  = "11.01";
        $_SESSION['select_wednesday']  = "12.01";
        $_SESSION['select_thursday']  = "13.01";
        $_SESSION['select_friday']  = "14.01";
        $_SESSION['select_saturday']  = "15.01";
    }
?>