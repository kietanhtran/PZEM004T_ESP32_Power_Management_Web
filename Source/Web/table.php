
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HIỂN THỊ</title>
	<link rel="stylesheet" href="">
	<!--<meta http-equiv="refresh" content="10">-->
</head>
<style type="text/css" media="screen">
    h1 {
        text-align:center;
        color:red;
    }
    .time {
        position:absolute;
        font-size:20pt;
        top:691px;
        left:1400px;
    }

        table.scroll tbody,
        table.scroll thead { display: block; }
        table.scroll1 tbody,
        table.scroll1 thead { display: block; }
        table.scroll3 tbody,
        table.scroll3 thead { display: block; }
        table.scroll4 tbody,
        table.scroll4 thead { display: block; }
        thead tr th { 
            height: 50px;
            line-height: 50px;
        
        }
            table.scroll tbody {
            height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }
            table.scroll1 tbody {
            height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }
             table.scroll3 tbody {
            height: 150px;
            overflow-y: auto;
            overflow-x: hidden;
        }
            table.scroll4 tbody {
            height: 150px;
            overflow-y: auto;
            overflow-x: hidden;
        }
        tbody { border-top: 2px solid black; }
        
        tbody td,tr, thead th {
            border-right: 1px solid black;
             white-space: nowrap; */ Tự động dàn văn bản k xuống dòng
        }
        
        tbody td:last-child, thead th:last-child {
            border-right: none;
        }
        .scroll{
                position:absolute;
                /*left:0px;*/
                /*float: left;*/
                font-size: 20pt;
                 border-spacing: 0;
                border: 2px solid black;
        }
                .scroll1{
                position:absolute;
                left:790px;
                font-size: 20pt;
                 border-spacing: 0;
                border: 2px solid black;
        }
                .scroll3{
                position:absolute;
                font-size: 20pt;
                 border-spacing: 0;
                border: 2px solid black;
                top:490px;
        }
                .scroll4{
                position:absolute;
                font-size: 20pt;
                 border-spacing: 0;
                border: 2px solid black;
                 top:490px;
                 left:790px;
        }
        th {
            color:red;
            text-align:center;
        }
         td {
            color:blue;
            text-align:center;
        }
        h2 {
            color:red;
            position:absolute;
            top:80px;
            left:0px;
            font-size:15pt;
        }
        h3 {
            color:red;
            position:absolute;
            top:80px;
            left:790px;
            font-size:15pt;
        }
        p1{
            position:absolute;
            top:400px;
            left:0px;
        }
         p2{
            position:absolute;
            top:400px;
            left:790px;
        }
        .thoigian1 {
            position:absolute;
            top:450px;
            font-size:15pt;
        }
        .thoigian2 {
            position:absolute;
            top:450px;
            left:790px;
            font-size:15pt;
        }
        h5{
            position:absolute;
            top:450px;
            font-size:15pt;
            left:740px;
        }

        .text{
             position:absolute;
             top:410px;
             left:410px;
             font-size:18pt;
        }
        .text1{
             position:absolute;
             top:410px;
             left:1210px;
             font-size:18pt;
        }
         .text2{
             position:absolute;
             top:670px;
             left:420px;
             font-size:18pt;
        }
        .text3{
             position:absolute;
             top:670px;
             left:1210px;
             font-size:18pt;
        }
        .date_1{
                width: 200px;
                height: 40px;;
                font-size: 15pt;
                /*background-color: aqua;*/
                position:absolute;
        }
         .date_2{
                width: 200px;
                height: 40px;;
                font-size: 15pt;
                /*background-color: aqua;*/
                position:absolute;
        }
        .date_3{
                width: 200px;
                height: 40px;;
                font-size: 15pt;
                top:660px;
                /*background-color: aqua;*/
                position:absolute;
        }
        .date_4{
                width: 200px;
                height: 40px;;
                font-size: 15pt;
                top:660px;
                /*background-color: aqua;*/
                position:absolute;
                left:790px;
        }
        .bt1{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color:pink;
                position:absolute;
                left:205px;
        }
        .bt2{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color: aqua;
                position:absolute;
                left:305px;
          
        }
        .bt3{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color:pink;
                position:absolute;
                left:215px;
        }
        .bt4{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color: aqua;
                position:absolute;
                left:315px;
               
        }
         .bt5{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color:pink;
                position:absolute;
                left:215px;
                top:660px;
        }
        .bt6{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color: aqua;
                position:absolute;
                left:315px;
                top:660px;
          
        }
        .bt7{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color:pink;
                position:absolute;
                left:1000px;
                top:660px;
        }
        .bt8{
                width: 100px;
                height: 48px;;
                font-size: 10pt;
                background-color: aqua;
                position:absolute;
                left:1100px;
                top:660px;
               
        }


</style>
<body background="bg.png">
        
    <h1> <big>GIÁM SÁT ĐIỆN NĂNG</big> </h1>

    <h2> TRẠM 1</h2> 
        <div class="time">
        <?php
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          $day = date("Y-m-d");
          echo $day;
          ?>
    </div>
    <div id="circle1">
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

        $sql = "SELECT  status FROM bang_test where station=1 order by id DESC ";
        $result = $conn->query($sql);
        $row1=mysqli_fetch_row($result);
        if($row1[0]==Ngung)
        {
            include("doi_mau_do.php");

        }
        else if($row1[0]==Khong_tai)
        {
            include("doi_mau_vang.php");
        }
        else if($row1[0]==Co_tai)
        {
            include("doi_mau_xanh.php");
        }
        else if($row1[0]==May_loi)
        {
            include("doi_mau_hong.php");
        }
        else
            include("mac_dinh.php");
        
        ?>

    </div>
 
    
       <!--==================-->
       
    <h3> TRẠM 2</h3>
    <div id="circle4">
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

        $sql = "SELECT  status FROM bang_test where station=2 order by id DESC ";
        $result = $conn->query($sql);
        $row1=mysqli_fetch_row($result);
        if($row1[0]==Ngung)
        {
            include("doi_mau_do1.php");

        }
        else if($row1[0]==Khong_tai)
        {
            include("doi_mau_vang1.php");
        }
        else if($row1[0]==Co_tai)
        {
            include("doi_mau_xanh1.php");
        }
        else if($row1[0]==May_loi)
        {
            include("doi_mau_hong1.php");
        }
        else
            include("mac_dinh1.php");
        
        ?>
    </div>
    
       <!--==================-->
       
   
    <h4>
 <br> <br> <br>
    </h4>



    <div class="text">  
           Xuất file Excel
    </div>
        <div class="text1">  
           Xuất file Excel
    </div>
        <div class="text2">  
           Xuất file Excel
    </div>
        <div class="text3">  
           Xuất file Excel
    </div>

	<table class="scroll"border="2"  >
		 <tr>
	          <th>Ca</th> 
	          <th>Trạng Thái</th> 
			  <th>Điện Áp</th> 
			  <th>Dòng</th> 
			  <th>Công Suất</th>
			  <th>Thời Gian</th>
		</tr>

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

        $sql = "SELECT  status,ca,voltage,current,power,energy,date_day
                                          FROM bang_test where station=1  order by id DESC ";
        $result = $conn->query($sql);
        if ($result) {
			   // output data of each row
			   while($row = $result->fetch_assoc()) {
			    echo "<tr><td>" . $row[ca]. "</td><td>" . $row[status]. "</td><td>" . $row[voltage]. "</td><td>" . $row["current"] . "</td><td>"
			. $row["power"]. "</td><td>" . $row["date_day"] . "</td></tr>";
			}
			echo "</table>";
			}
			 else { echo "0 results"; }
			$conn->close();
?>

<!--//======================== bảng 2-->

	</table>
	<table>
	    <table class="scroll1"border="2"  >
		 <tr>
	          <th>Ca</th> 
	          <th>Trạng Thái</th> 
			  <th>Điện Áp</th> 
			  <th>Dòng</th> 
			  <th>Công Suất</th>
			  <th>Thời Gian</th>
		</tr>
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

        $sql = "SELECT status,ca, voltage,current,power,energy,date_day
                                          FROM bang_test where station=2  order by id DESC ";
        $result = $conn->query($sql);
        if ($result) {
			   // output data of each row
			   while($row = $result->fetch_assoc()) {
			    echo "<tr><td>" . $row[ca]. "</td><td>" . $row[status]. "</td><td>" . $row[voltage]. "</td><td>" . $row["current"] . "</td><td>"
			. $row["power"]. "</td><td>" . $row["date_day"] . "</td></tr>";
			}
			echo "</table>";
			}
			 else { echo "0 results"; }
			$conn->close();
            
?>

	</table>
		<script>
            var table = $('table.scroll1'), bodyCells = table.find('tbody tr:first').children(),colWidth;
            
            $(window).resize(function() {
                colWidth = bodyCells.map(function() {
                    return $(this).width();
                }).get();
                
                table.find('thead tr').children().each(function(i, v) {
                    $(v).width(colWidth[i]);
                });    
            }).resize();
            </script>
<!--===============================================-->
    <p1>
        <form  action="export.php" method="GET">
    	<input  class="date_1" type="date" name="data">
	    <input  class="bt1" type="submit" name="submit" value="Ca_1">
	    <input  class="bt2" type="submit" name="submit" value="Ca_2">
	     </form>
    </p1>
    <p2>       
      
        <form  action="export2.php" method="GET">
    	<input  class="date_2" type="date" name="data">
	    <input  class="bt3" type="submit" name="submit" value="Ca_1">
	    <input  class="bt4" type="submit" name="submit" value="Ca_2">
        </form>
        </p2>
<div class="thoigian1">
<big style="color:red">THỜI GIAN HOẠT ĐỘNG</big> 
<br>
<?php
include('all_time.php');
?>
</div>  
<!--========================================table 3-->
	<table>
	    <table class="scroll3"border="2"  >
		 <tr>
	          <th>Ca</th> 
			  <th>Không Tải</th> 
			  <th>Có Tải</th> 
			  <th>Máy Lỗi</th>
			  <th>Thời Gian</th>
		</tr>
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

        $sql = "SELECT ca,time_ktai,time_cotai,time_loi,date
                                          FROM time_all where station=1  order by id DESC ";
        $result = $conn->query($sql);
        if ($result) {
			   // output data of each row
			   while($row = $result->fetch_assoc()) {
			    echo "<tr><td>" . $row[ca]. "</td><td>" . $row[time_ktai]. "</td><td>" . $row[time_cotai]. "</td><td>" . $row[time_loi] . "</td><td>". $row["date"]. "</td></tr>";
			}
			echo "</table>";
			}
			 else { echo "0 results"; }
			$conn->close();
            
?>

	</table>
		<script>
            var table = $('table.scroll3'), bodyCells = table.find('tbody tr:first').children(),colWidth;
            
            $(window).resize(function() {
                colWidth = bodyCells.map(function() {
                    return $(this).width();
                }).get();
                
                table.find('thead tr').children().each(function(i, v) {
                    $(v).width(colWidth[i]);
                });    
            }).resize();
            </script>

<!--================================================================================== table 4-->
    <table>
	    <table class="scroll4"border="2"  >
		 <tr>
	          <th>Ca</th> 
			  <th>Không Tải</th> 
			  <th>Có Tải</th> 
			  <th>Máy Lỗi</th>
			  <th>Thời Gian</th>
		</tr>
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

        $sql = "SELECT ca,time_ktai,time_cotai,time_loi,date FROM time_all where station=2  order by id DESC ";
        $result = $conn->query($sql);
        if ($result) {
			   // output data of each row
			   while($row = $result->fetch_assoc()) {
			    echo "<tr><td>" . $row[ca]. "</td><td>" . $row[time_ktai]. "</td><td>" . $row[time_cotai]. "</td><td>" . $row[time_loi] . "</td><td>". $row["date"]. "</td></tr>";
			}
			echo "</table>";
			}
			 else { echo "0 results"; }
			$conn->close();
            
?>

	</table>
		<script>
            var table = $('table.scroll4'), bodyCells = table.find('tbody tr:first').children(),colWidth;
            
            $(window).resize(function() {
                colWidth = bodyCells.map(function() {
                    return $(this).width();
                }).get();
                
                table.find('thead tr').children().each(function(i, v) {
                    $(v).width(colWidth[i]);
                });    
            }).resize();
            </script>
<!--=========================================================-->
<div>
        <form  action="export3.php" method="GET">
    	<input  class="date_3" type="date" name="data">
	    <input  class="bt5" type="submit" name="submit" value="Ca_1">
	    <input  class="bt6" type="submit" name="submit" value="Ca_2">
	     </form>
	   <form  action="export4.php" method="GET">
    	<input  class="date_4" type="date" name="data">
	    <input  class="bt7" type="submit" name="submit" value="Ca_1">
	    <input  class="bt8" type="submit" name="submit" value="Ca_2">
	     </form>
</div>

  <div class="thoigian2"> 
<big style="color:red">THỜI GIAN HOẠT ĐỘNG</big> 
<br>
<?php
include('all_time2.php');
?>
</div>


<div>
<?php
include("date_dif.php");
include("date_dif1.php");

?>
</div>

</body>
</html>

<!-- Đối với table:
<!--- bgcolor: định nghĩa màu nền cho bảng-->
<!--- border: Viền của bảng-->
<!--- width: qui định độ rộng của bảng-->
<!--- height: Chiều cao của bảng-->
<!--- cellspacing: qui định khoảng cách của viền bảng ra bên ngoài-->
<!--- cellpadding: qui định khoảng cách của viền bảng vào bền trong-->
<!--- align: Canh lề cho bảng: center, left, right-->

<!--Đối với td: -->
<!--- width: Độ rộng của cột-->
<!--- height: chiều cao của cột-->
<!--- bgcolor: màu nền của cột-->
<!--- align: Canh nội dung của cột: center, left, right-->
<!--- valign: canh nội theo trên dưới của cột : top, middle, bottom-->
<!--- colspan: Gộp cột-->
<!--- rowspan: Gộp dòng lại với nhau 