
<?php
    include 'connect.php';
    session_start();

    for($i = 1; $i <= 6; $i++){ //i - номер столбика
        switch ($i) {
            case 1:
              $day_name = 'monday';
              break;
            case 2:
              $day_name = 'tuesday';
              break;
            case 3:
              $day_name = 'wednesday';
              break;
            case 4:
                $day_name = 'thursday';
                break;
            case 5:
                $day_name = 'friday';
                break;
            case 6:
                $day_name = 'saturday';
                break;
        }
        $date = $_SESSION['select_'.$i.''];

        for($ii = 1; $ii <= 7; $ii++){ //ii - номер строчки
            switch ($ii) {
                case 1:
                    $subject_time = '08:30-10:00';
                    break;
                case 2:
                    $subject_time = '10:10-11:40';
                    break;
                case 3:
                    $subject_time = '11:50-13:20';
                  break;
                case 4:
                    $subject_time = '13:30-15:00';
                    break;
                case 5:
                    $subject_time = '15:10-16:40';
                    break;
                case 6:
                    $subject_time = '16:50-18:20';
                    break;
                case 7:
                    $subject_time = '18:30-20:00';
                    break;
                case 8:
                    $subject_time = '20:00-21:30';
                    break;
           }
           $date_a = str_replace(".", "-", $date);
           $date_a = "2021-".$date_a;
           if($i == 1){
            $date_a = '2021-09-30';
           }
           else
           {
            if($i == 2){
                $date_a = '2021-10-01';
                 }
                else
                {
                 break;
                }
           }
            
            //$query = mysqli_query($conn, "SELECT * FROM `TimeTable` WHERE `date` = $date AND `bell_id` = $ii"); //!!!!!преобразовать дату!
            /*$query = mysqli_query($conn, "SELECT id FROM TimeTable WHERE date = '".$date_a."'");

            $pair = mysqli_fetch_assoc($query); // хранит в себе то что хранит вся сторочка TimeTable */
            $query = mysqli_query($conn, "SELECT * FROM `TimeTable` WHERE `date`='$date_a' AND `bell_id`='$ii'");
		    $pair = mysqli_fetch_assoc($query);

            //$day_name = date("w", mktime(0,0,0, date("m"), date("d"), date("Y")));
            if($pair['id'] != ''){
                $classroom_id = $pair['classroom_id'];

                $query1 = mysqli_query($conn, "SELECT * FROM `classroom` WHERE `id`=$classroom_id");
                $classroom = mysqli_fetch_assoc($query1);
                
                $subject_id = $pair['subject_id'];
                $query2 = mysqli_query($conn, "SELECT * FROM `subject` WHERE `id`=$subject_id");
                $subject = mysqli_fetch_assoc($query2);

                
                $teacher_id = $pair['teacher_id'];
                $query3 = mysqli_query($conn, "SELECT * FROM `teachers` WHERE `id`=$teacher_id");
                $teacher = mysqli_fetch_assoc($query3);

                $groups_id = $pair['groups_id'];
                $query4 = mysqli_query($conn, "SELECT * FROM `groups` WHERE `id`=$groups_id");
                $groups = mysqli_fetch_assoc($query4);

                $subgroups_id = $pair['subgroups_id'];
                $query5 = mysqli_query($conn, "SELECT* FROM `subgroups` WHERE `id`=$subgroups_id");
                $subgroups = mysqli_fetch_assoc($query5);
                if($subject['type'] = 'ПР'){
                    $subject_name = 'Практическая работа';
                }
                echo'
                <div class="lessonBlock'.$i.''.$ii.'">
                    <div class="lessonInfo" id="'.$day_name.'">
                        <div class="time">'.$subject_time.'</div>
                        <div class="audience">'.$classroom['label'].'</div>
                    </div>
                    <div class="lessonInfoName">
                        <div class="lessonName">'.$subject['name'].'</div>
                        <div id="extraInfo">
                            <div class="type">'.$subject_name.'</div>
                            <div class="teacherName">'.$teacher['name'].'</div>
                        </div>
                        <div class="groupNumber">'.$groups['name'].' <br> (подгруппа: '.$subgroups['count'].')</div>
                    </div>
                </div>';
            }
        }
    }
?>