<?php
        $servername = "localhost";
        $username = "u546640326_tung";
        $password = "123456";
        $dbname = "u546640326_test";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
                echo '<script>
        
                echo("error");
                </script>';
            } 

       $result = $conn->query( "SELECT  date_day FROM bang_test where station=2 order by id DESC ");
       $result1 = $conn->query( "SELECT  status FROM bang_test where station=2 order by id DESC ");
        $result2 = $conn->query( "SELECT  trangthai FROM bang_time where station=2 order by id DESC ");
        $row = mysqli_fetch_row($result);
        $row1 = mysqli_fetch_row($result);
        $row2 = mysqli_fetch_row($result1);
        $row3 = mysqli_fetch_row($result1);
        $row4=  mysqli_fetch_row($result2);
        $status="$row2[0]-$row3[0]";
        $station=2;
        if($row2[0]!=$row3[0]){
        $diff = (strtotime($row[0]) - strtotime($row1[0]));
       
          $years = floor($diff / (365*60*60*24));
  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
  $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
  $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
  $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60
  ));

        //  $dinh_dang_moi = date("$years-$months-$days H:i:s",$diff);
        // echo $dinh_dang_moi;
        // echo $status;
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $day = date("Y-m-d H:i:s");
  $day1=date("Y-m-d 07:00:00");
  $day2=date("Y-m-d 13:20:00");
  $day3=date("Y-m-d 13:30:00");
  $day4=date("Y-m-d 22:00:00");
  $time1=strtotime("$day");
  $time2=strtotime("$day1");
  $time3=strtotime("$day2");
  $time4=strtotime("$day3");
  $time5=strtotime("$day4");

    if($time2 < $time1 && $time1 < $time3)
  {
      $ca=1;
  }
  else if($time4 < $time1 && $time1 < $time5)
  {
      $ca=2;
  }

// time có tải và không tải
     if($status!=$row4[0])
     {
 if($row2[0]==Co_tai&&$row3[0]==Khong_tai||$row2[0]==May_loi&&$row3[0]==Khong_tai||$row2[0]==Ngung&&$row3[0]==Khong_tai)
 {

  $sql = "INSERT INTO bang_time (time_ktai,trangthai,ngay_gio,station,ca)
VALUES ('$diff ','$status','$day','$station','$ca')";

if ($conn->query($sql) === TRUE) {
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else  if($row2[0]==Khong_tai&&$row3[0]==Co_tai||$row2[0]==May_loi&&$row3[0]==Co_tai||$row2[0]==Ngung&&$row3[0]==Co_tai)
{
  $sql = "INSERT INTO bang_time (time_cotai,trangthai,ngay_gio,station,ca)
VALUES ('$diff ','$status','$day','$station','$ca')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// time máy lỗi
if($row2[0]==Ngung&&$row3[0]==May_loi)
{
  $sql = "INSERT INTO bang_time (time_loi,trangthai,ngay_gio,station,ca)
VALUES ('$diff ','$status','$day','$station','$ca')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
}
        

?>