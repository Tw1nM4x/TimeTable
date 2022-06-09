<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Расписание</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&family=Inter:wght@500&display=swap" rel="stylesheet">
</head>
<header>
    <div class="headerMain">
        <div class="profileMain">
            <div class="profile">
                <div class="mainName">
                    <div class="name"><?php echo($_SESSION['Fname']); ?> <?php echo($_SESSION['Lname']); ?></div>
                    <div class="group"><?php echo($_SESSION['group']); ?></div>
                </div>
                <div class="avatar"></div>
            </div>
        </div>
        <div class="navigation">
            <div class="navigationText">

                <img src="img/ball1.png" class = "ball1">
                <img src="img/ball2.png" class = "ball2">
                <img src="img/balls9.png" class = "balls9">
                <img src="img/waves.png" class = "waves">

                <div class="scheduleClasses">Расписание занятий</div>

                <div class="mySchedule">Моё расписание</div>
                <div class="searchGroup">Поиск по групе</div>
                <div class="searchTeacher">Поиск по преподавателю</div>
                <div class="searchAudience">Поиск по аудитории</div>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="main">
        <div class="info">
            <div class="group1">Б9120-09.03.03пикд</div>
            <div class="time1">
                <div class="btnLeft"></div>
                <div class="timeText">Сегодня</div>
                <div class="btnRight"></div>
            </div>
            <div class="dataBlock">
                <div class="data">
                    <div class="day">11 - 16</div>
                    <div class="month">апр.</div>
                    <div class="year">2022г.</div>
                </div>
                <div class="week">26 неделя(чет.)</div>
            </div>
        </div>

        <img src="img/ball3.png" class = "ball3">
        <img src="img/ball4.png" class = "ball4">
        <img src="img/waves2.png" class = "waves2">

        <div class="scheduleBlock">
            <div class="weekday">
                <div class="mondayBlock" id="weekdayBlock">
                    <div class="mondayText" id="weekday">Понедельник</div>
                    <div class="mondayData" id="weekday">11.05</div>
                </div>
                <div class="tuesdayBlock" id="weekdayBlock">
                    <div class="tuesdayText" id="weekday">Вторник</div>
                    <div class="tuesdayData" id="weekday">12.05</div>
                </div>
                <div class="wednesdayBlock" id="weekdayBlock">
                    <div class="wednesdayText" id="weekday">Среда</div>
                    <div class="wednesdayData" id="weekday">13.05</div>
                </div>
                <div class="thursdayBlock" id="weekdayBlock">
                    <div class="thursdayText" id="weekday">Четверг</div>
                    <div class="thursdayData" id="weekday">14.05</div>
                </div>
                <div class="fridayBlock" id="weekdayBlock">
                    <div class="fridayText" id="weekday">Пятница</div>
                    <div class="fridayData" id="weekday">15.05</div>
                </div>
                <div class="saturdayBlock" id="weekdayBlock">
                    <div class="saturdayText" id="weekday">Суббота</div>
                    <div class="saturdayData" id="weekday">16.05</div>
                </div>
            </div>

            <div class="scheduleBox">
                <div class="lesson1" id="lessons">
                    <div class="lessonBlock" style="height: 170px;">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <?php
                        $id = 1;
                        $z = "'";
                        $block = "'block";
                        $extraInfo = "'extraInfo";
                        $heightClose = "'72%'";
                        $heightOpen = "'80%'";
                        ?>
                        <?php
                        echo'
                          <div class="lessonInfoName" id="block'.$id.'" onclick="Open('.$block.''.$id.''.$z.', '.$heightClose.', '.$heightOpen.','.$extraInfo.''.$id.''.$z.')">
                              <div class="lessonName">Аналитическая геометрия</div>
                              <div style="display:none" id="extraInfo'.$id.'">
                                <div class="type">Лабараторные работы</div>
                                <div class="teacherName">Фамилия Имя Отчество</div>
                              </div>
                              <div class="groupNumber" >Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                          </div>';
                        $id++;
                        ?>
                    </div>
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="tuesday">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div id="extraInfo">
                              <div class="type">Лабараторные работы</div>
                              <div class="teacherName">Фамилия Имя Отчество</div>
                            </div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="wednesday">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="thursday">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="friday">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="saturday">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson2" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson3" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson4" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson5" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson6" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson7" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
                <div class="lesson8" id="lessons">
                    <div class="lessonBlock">
                        <div class="lessonInfo" id="mondey">
                            <div class="time">8:30 - 10:00</div>
                            <div class="audience">D624 (D752)</div>
                        </div>
                        <div class="lessonInfoName">
                            <div class="lessonName">Аналитическая геометрия</div>
                            <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
