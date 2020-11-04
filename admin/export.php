<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      require_once('../dbcon.php');  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w+");  
      fputcsv($output, array('ID', 'Name', 'age', 'Mobile Number', 'Present Address'));  
      $query = "SELECT * from care ORDER BY id ASC";  
      $result = mysqli_query($link, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  