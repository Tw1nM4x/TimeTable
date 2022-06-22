<?php
    session_start();
    include ('select_week.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/addFile.css">
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

                <div class="mySchedule" onclick="location.href='resetSort.php'">Моё расписание</div>
                <div class="searchGroup" onclick="Select('selectGroup')">Поиск по группе</div>
                <div class="searchTeacher" onclick="Select('selectTeacher')">Поиск по преподавателю</div>
                <div class="searchAudience" onclick="Select('selectClassroom')">Поиск по аудитории</div>
            </div>
        </div>
    </div>
</header>
<script>
function Select(id){
    document.getElementById(id).style.display = 'flex';
}
</script>
<body>
    <div id="selectGroup" class="ava_massage">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <form action="setSort.php" class="ava_ava_add" method="post" enctype="multipart/form-data">
        <label class = "heading_add">Поиск по группе</label>
        <input type="text" name="sortType" id="sortType" value="group" style="display:none;"></input>
        <div class="ava_input__wrapper">
          <select name="sort" id="groups">
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
        </div>
        <button type="submit" class = "ava_add">Искать</button>
      </form>
    </div>
    <div id="selectTeacher" class="ava_massage">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <form action="setSort.php" class="ava_ava_add" method="post" enctype="multipart/form-data">
        <label class = "heading_add">Поиск по группе</label>
        <input type="text" name="sortType" id="sortType" value="teacher" style="display:none;"></input>
        <div class="ava_input__wrapper">
          <select name="sort">
            <?php
              $query = mysqli_query($conn, "SELECT * FROM `teachers` ORDER BY `name`");
              while($teacher = mysqli_fetch_assoc($query)){
                echo '<option value="'.$teacher['id'].'">'.$teacher['name'].'</option>';
              }
            ?>
          </select>
        </div>
        <button type="submit" class = "ava_add">Искать</button>
      </form>
    </div>
    <div id="selectClassroom" class="ava_massage">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <form action="setSort.php" class="ava_ava_add" method="post" enctype="multipart/form-data">
        <label class = "heading_add">Поиск по группе</label>
        <input type="text" name="sortType" id="sortType" value="classroom" style="display:none;"></input>
        <div class="ava_input__wrapper">
          <select name="sort" id="groups">
            <?php
              $query = mysqli_query($conn, "SELECT * FROM `classroom` ORDER BY `label`");
              while($classroom = mysqli_fetch_assoc($query)){
                echo '<option value="'.$classroom['id'].'">'.$classroom['label'].'</option>';
              }
            ?>
          </select>
        </div>
        <button type="submit" class = "ava_add">Искать</button>
      </form>
    </div>
    <div class="main">
        <div class="info">
            <div class="group1"><?php echo $_SESSION['sortPrint']; ?></div>
            <div class="time1">
                <?php if($_SESSION['week_numder'] > 1){ ?>
                    <div onclick="location.href='last_day.php';" class="btnLeft"></div>
                <?php } ?>

                <div class="timeText">Сегодня</div>

                <?php if($_SESSION['week_numder'] < 18){ ?>
                    <div onclick="location.href='next_day.php';" class="btnRight"></div>
                <?php } ?>
            </div>
            <div class="dataBlock">
                <div class="data"><?php echo($_SESSION['selected_day']); ?> </div>
                <div class="week"><?php echo($_SESSION['selected_week']); ?></div>
            </div>
        </div>

        <img src="img/ball3.png" class = "ball3">
        <img src="img/ball4.png" class = "ball4">
        <img src="img/waves2.png" class = "waves2">

        <div class="scheduleBlock">
            <div class="weekday">
                <div class="mondayBlock" id="weekdayBlock">
                    <div class="mondayText" id="weekday">Понедельник</div>
                    <div class="mondayData" id="weekday"><?php echo($_SESSION['select_monday']); ?></div>
                </div>
                <div class="tuesdayBlock" id="weekdayBlock">
                    <div class="tuesdayText" id="weekday">Вторник</div>
                    <div class="tuesdayData" id="weekday"><?php echo($_SESSION['select_tuesday']); ?></div>
                </div>
                <div class="wednesdayBlock" id="weekdayBlock">
                    <div class="wednesdayText" id="weekday">Среда</div>
                    <div class="wednesdayData" id="weekday"><?php echo($_SESSION['select_wednesday']); ?></div>
                </div>
                <div class="thursdayBlock" id="weekdayBlock">
                    <div class="thursdayText" id="weekday">Четверг</div>
                    <div class="thursdayData" id="weekday"><?php echo($_SESSION['select_thursday']); ?></div>
                </div>
                <div class="fridayBlock" id="weekdayBlock">
                    <div class="fridayText" id="weekday">Пятница</div>
                    <div class="fridayData" id="weekday"><?php echo($_SESSION['select_friday']); ?></div>
                </div>
                <div class="saturdayBlock" id="weekdayBlock">
                    <div class="saturdayText" id="weekday">Суббота</div>
                    <div class="saturdayData" id="weekday"><?php echo($_SESSION['select_saturday']); ?></div>
                </div>
            </div>

            <!-- <div class="lessonBlock" style="height: 170px;">
                <div class="lessonInfo" id="mondey">
                    <div class="time">8:30 - 10:00</div>
                    <div class="audience">D624 (D752)</div>
                </div>
                <?php /*
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
                        <div class="lessonName">111111</div>
                        <div style="display:none" id="extraInfo'.$id.'">
                        <div class="type">Лабараторные работы</div>
                        <div class="teacherName">Фамилия Имя Отчество</div>
                        </div>
                        <div class="groupNumber" >Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                    </div>';
                $id++;*/
                ?>
            </div>-->
            <?php
            include ('echo_table.php');

            ?>

            <!--<div class="lessonBlock25">
                <div class="lessonInfo" id="monday">
                    <div class="time">8:30 - 10:00</div>
                    <div class="audience">D624 (D752)</div>
                </div>
                <div class="lessonInfoName">
                    <div class="lessonName">2222222s</div>
                    <div id="extraInfo">
                        <div class="type">Лабараторные работы</div>
                        <div class="teacherName">Фамилия Имя Отчество</div>
                    </div>
                    <div class="groupNumber">Б9120-09.03.03 ПИКД <br> (подгруппа: 1)</div>
                </div>
            </div>-->

        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
