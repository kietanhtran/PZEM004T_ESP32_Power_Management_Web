<?php
  
 // include('test.php');
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
  $station=  $_GET['station'];
  $status=  $_GET['status'];
  $voltage = $_GET['voltage'];
  $current = $_GET['current'];
  $power = $_GET['power'];
  $energy = $_GET['energy'];
  $ca = $_GET['ca'];
  
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $day = date("Y-m-d H:i:s");
  $day1=date("Y-m-d 07:00:00 ");
  $day2=date("Y-m-d 13:29:00 ");
  $day3=date("Y-m-d 13:30:00 ");
  $day4=date("Y-m-d  22:00:00 ");
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
  $sql = " INSERT INTO bang_test (station,status,voltage,current, power,energy, date_day,ca)
                 VALUES ('".$station."','".$status."','".$voltage."','".$current."','".$power."', '".$energy."', '".$day."','".$ca."') ";
    if($conn->query($sql) === TRUE)
    { 
        echo 'cap nhat thanh cong';
    }
    else
    {
        echo $sql;
        echo 'erro';
    }
    $conn->close();

include('date_dif.php');
include('date_dif1.php');
?>