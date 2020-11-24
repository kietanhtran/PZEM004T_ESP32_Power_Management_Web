<?php
  $mysqli = mysqli_connect('localhost','u546640326_tung','123456','u546640326_test');
  $mysqli->set_charset('utf8');
  if(mysqli_connect_errno()){
	echo 'Connect Failed: '.mysqli_connect_error();
	exit;
}
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $day = date("Y-m-d");
  $day1=date("Y-m-d H:i:s");
  $station=1;
  $ca1=1;
  $ca2=2;
    $result = $mysqli->query("SELECT SUM(time_ktai)  FROM bang_time where ca=1 and station=1 and ngay_gio LIKE '%".$day."%' order by id DESC  ");
    $result1 = $mysqli->query("SELECT SUM(time_cotai)  FROM bang_time where ca=1 and station=1 and ngay_gio LIKE '%".$day."%' order by id DESC  ");
    $result2 = $mysqli->query("SELECT SUM(time_loi)  FROM bang_time where ca=1 and station=1 and ngay_gio LIKE '%".$day."%' order by id DESC  ");
     $result3 = $mysqli->query("SELECT SUM(time_ktai)  FROM bang_time where ca=2 and station=1 and ngay_gio LIKE '%".$day."%' order by id DESC  ");
    $result4 = $mysqli->query("SELECT SUM(time_cotai)  FROM bang_time where ca=2 and station=1 and ngay_gio LIKE '%".$day."%' order by id DESC  ");
    $result5 = $mysqli->query("SELECT SUM(time_loi)  FROM bang_time where ca=2 and station=1 and ngay_gio LIKE '%".$day."%' order by id DESC  ");  
    $result6 = $mysqli->query("SELECT time_ktai,time_cotai,time_loi  FROM time_all where ca=1 and station=1  order by id DESC  "); 
        $result7 = $mysqli->query("SELECT time_ktai,time_cotai,time_loi  FROM time_all where ca=2 and station=1  order by id DESC  "); 
     $row = mysqli_fetch_array($result6);
    $row1 = mysqli_fetch_array($result7);
    // ===========================
    $diff = mysqli_fetch_row($result);
              $years = floor($diff[0] / (365*60*60*24));
  $months = floor(($diff[0] - $years * 365*60*60*24) / (30*60*60*24));
  $days = floor(($diff[0] - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
  $hours = floor(($diff[0] - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
  $minutes = floor(($diff[0] - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
  $seconds = floor(($diff[0] - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60
  ));

// ===================
    $diff1 = mysqli_fetch_row($result1);
              $years1 = floor($diff[0] / (365*60*60*24));
  $months1 = floor(($diff1[0] - $years1 * 365*60*60*24) / (30*60*60*24));
  $days1 = floor(($diff1[0] - $years1 * 365*60*60*24 - $months1*30*60*60*24) / (60*60*24));
  $hours1 = floor(($diff1[0] - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24) / (60*60));
  $minutes1 = floor(($diff1[0] - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60) / 60);
  $seconds1 = floor(($diff1[0] - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60 - $minutes1*60
  ));
// ===================
    $diff2 = mysqli_fetch_row($result2);
              $years2 = floor($diff2[0] / (365*60*60*24));
  $months2 = floor(($diff2[0] - $years2 * 365*60*60*24) / (30*60*60*24));
  $days2 = floor(($diff2[0] - $years2 * 365*60*60*24 - $months2*30*60*60*24) / (60*60*24));
  $hours2 = floor(($diff2[0] - $years2 * 365*60*60*24 - $months2*30*60*60*24 - $days2*60*60*24) / (60*60));
  $minutes2 = floor(($diff2[0] - $years2 * 365*60*60*24 - $months2*30*60*60*24 - $days2*60*60*24 - $hours2*60*60) / 60);
  $seconds2 = floor(($diff2[0] - $years2 * 365*60*60*24 - $months2*30*60*60*24 - $days2*60*60*24 - $hours2*60*60 - $minutes2*60
  ));
//   =====================
    $diff3 = mysqli_fetch_row($result3);
              $years3 = floor($diff3[0] / (365*60*60*24));
  $months3 = floor(($diff3[0] - $years3 * 365*60*60*24) / (30*60*60*24));
  $days3 = floor(($diff3[0] - $years3 * 365*60*60*24 - $months3*30*60*60*24) / (60*60*24));
  $hours3 = floor(($diff3[0] - $years3 * 365*60*60*24 - $months3*30*60*60*24 - $days3*60*60*24) / (60*60));
  $minutes3 = floor(($diff3[0] - $years3 * 365*60*60*24 - $months3*30*60*60*24 - $days3*60*60*24 - $hours3*60*60) / 60);
  $seconds3 = floor(($diff3[0] - $years3 * 365*60*60*24 - $months3*30*60*60*24 - $days3*60*60*24 - $hours3*60*60 - $minutes3*60
  ));
// ===================
    $diff4 = mysqli_fetch_row($result4);
              $years4 = floor($diff4[0] / (365*60*60*24));
  $months4 = floor(($diff4[0] - $years4 * 365*60*60*24) / (30*60*60*24));
  $days4 = floor(($diff4[0] - $years4 * 365*60*60*24 - $months4*30*60*60*24) / (60*60*24));
  $hours4 = floor(($diff4[0] - $years4 * 365*60*60*24 - $months4*30*60*60*24 - $days4*60*60*24) / (60*60));
  $minutes4 = floor(($diff4[0] - $years4 * 365*60*60*24 - $months4*30*60*60*24 - $days4*60*60*24 - $hours4*60*60) / 60);
  $seconds4 = floor(($diff4[0] - $years4 * 365*60*60*24 - $months4*30*60*60*24 - $days4*60*60*24 - $hours4*60*60 - $minutes4*60
  ));
// ===================
    $diff5 = mysqli_fetch_row($result5);
              $years5 = floor($diff5[0] / (365*60*60*24));
  $months5 = floor(($diff5[0] - $years5 * 365*60*60*24) / (30*60*60*24));
  $days5 = floor(($diff5[0] - $years5 * 365*60*60*24 - $months5*30*60*60*24) / (60*60*24));
  $hours5 = floor(($diff5[0] - $years5 * 365*60*60*24 - $months5*30*60*60*24 - $days5*60*60*24) / (60*60));
  $minutes5 = floor(($diff5[0] - $years5 * 365*60*60*24 - $months5*30*60*60*24 - $days5*60*60*24 - $hours5*60*60) / 60);
  $seconds5 = floor(($diff5[0] - $years5 * 365*60*60*24 - $months5*30*60*60*24 - $days5*60*60*24 - $hours5*60*60 - $minutes5*60
  ));
$time = date(" $hours:$minutes:$seconds",$diff[0]);
$time1=date(" $hours1:$minutes1:$seconds1",$diff1[0]);
$time2=date(" $hours2:$minutes2:$seconds2",$diff2[0]);
$time3=date(" $hours3:$minutes3:$seconds3",$diff3[0]);
$time4=date(" $hours4:$minutes4:$seconds4",$diff4[0]);
$time5=date(" $hours5:$minutes5:$seconds5",$diff5[0]);

// ====================
  

// =============
if(strtotime("$row[0]")!=strtotime("$time")||strtotime("$row[1]")!=strtotime("$time1")||strtotime("$row[2]")!=strtotime("$time2"))
{

  $sql = "INSERT INTO time_all (time_ktai,time_cotai,time_loi,station,ca,date)
VALUES ('$time ','$time1 ','$time2 ','$station','$ca1','$day1')";
if ($mysqli->query($sql) === TRUE) {


} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
if(strtotime("$row1[0]")!=strtotime("$time3")||strtotime("$row1[1]")!=strtotime("$time4")||strtotime("$row1[2]")!=strtotime("$time5"))
{
  $sql1 = "INSERT INTO time_all (time_ktai,time_cotai,time_loi,station,ca,date)
VALUES ('$time3 ','$time4 ','$time5 ','$station','$ca2','$day1')";
if ($mysqli->query($sql1) === TRUE) {


} else {
    echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}
}
  

 
?>