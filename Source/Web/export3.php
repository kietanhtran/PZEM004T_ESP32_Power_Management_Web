<?php
  require('Classes/PHPExcel.php');
  $mysqli = mysqli_connect('localhost','u546640326_tung','123456','u546640326_test');
  $mysqli->set_charset('utf8');
  if(mysqli_connect_errno()){
	echo 'Connect Failed: '.mysqli_connect_error();
	exit;
}

        $objExcel = new PHPExcel;  //tạo một đối tượng excel
        $objExcel -> setActiveSheetIndex(0); //tạo một sheetindex và sheet đầu tiên là sheet 0
        $sheet=$objExcel->getActiveSheet()-> setTitle('may1'); //set lại title cho sheet của mình

        $rowCount=1;
          $sheet->setCellValue('A'.$rowCount,'Không Tải');
          $sheet->setCellValue('B'.$rowCount,'Có Tải');
          $sheet->setCellValue('C'.$rowCount,'Máy Lỗi');
          $sheet->setCellValue('D'.$rowCount,'Thời Gian');
      
             $data1 = $_GET['data'];
             $submit=$_GET['submit'];
            if($submit==Ca_1)
            {

            $result = $mysqli->query("SELECT  time_ktai,time_cotai,time_loi,date
                                          FROM time_all where station=1 and date LIKE '%".$data1."%' and ca=1 ");
        
            }  
            else {
            $result = $mysqli->query("SELECT  time_ktai,time_cotai,time_loi,date
                                          FROM time_all where station=1 and date LIKE '%".$data1."%' and ca=2 ");
            }
            while($row = mysqli_fetch_array($result)){
             //  print_r($row);
                        $rowCount++;
            $sheet->setCellValue('A'.$rowCount,$row['time_ktai']);
            $sheet->setCellValue('B'.$rowCount,$row['time_cotai']);
            $sheet->setCellValue('C'.$rowCount,$row['time_loi']);
            $sheet->setCellValue('D'.$rowCount,$row['date']);

                       
            }

    $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    $filename = 'tram1.xlsx';
    $objWriter->save($filename);
    header('Content-Disposition: attachment; filename="' . $filename . '"');  
    header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');  
    //header("Content-Type: application/vnd.ms-excel");
    header('Content-Length: ' . filesize($filename));  
    header('Content-Transfer-Encoding: binary');  
    //header('Cache-Control: must-revalidate'); 
    header('Cache-Control: must-revalidate');
    header('Pragma: no-cache');  
    readfile($filename);  
    return;    
            
    
?>