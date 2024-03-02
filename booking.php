<?php
// Connecting to database
 include('db_connect.php'); 
//  getting data from form
 $adharno = $_POST['adharno'];
 $name = $_POST['name'];
 $age = $_POST['age'];
 $department = $_POST['department'];
 $date = $_POST['date'];
 $time = $_POST['time'];

 $sql = "INSERT INTO `apointment` (`adharno`, `name`, `age`, `department`, `date`, `time`) VALUES ('$adharno', '$name', '$age', '$department', '$date', '$time');";
//  echo $sql;

 
if($con->query($sql) == true){
  // echo "Sucessfully Inserted";
  $msg = "Appointment Fixed";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/downloadticket.php?adharno='.$adharno.'";';
    echo '</script>';
}

 $con->close();



?>