<?php
//Getting the value of Post Parameter 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $tpassword = $_POST['tpassword'];
  $password = $_POST['password'];

  //checking for valid name feild
  if(strlen($name)>20 or strlen($name)<2 ){
    $msg = "Please choos a name between 2 to 20 characters";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/Admin%20Page/adminlogin.html";';
    echo '</script>';
 }

 else if($tpassword != $password){
    $msg = "Password and Re-Entered Password Doesnt Match";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/Admin%20Page/adminlogin.html";';
    echo '</script>';

 }
 else{
    //connect to Database
    include 'db_connect.php';
 }
 

 //checking for Mobile No exist
 $sql = "SELECT * FROM `admindata` WHERE mobile ='$mobile' ";
 $result = mysqli_query($con, $sql);

 if($result){
    if(mysqli_num_rows($result) > 0){
        $msg = "Enter Valid Adharcard Number It Already exist";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/project/Admin%20Page/adminlogin.html";';
        echo '</script>';
    


    }
    else{
      

    //inserting the data to userdata database
    $sql =" INSERT INTO `admindata` ( `email`, `name`, `mobile`, `password`) VALUES ('$email', '$name', '$mobile', '$tpassword')";
    if(mysqli_query($con, $sql)){

        $msg = "Successfully Registered..";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/project/Admin%20Page/adminlogin.html";';
        echo '</script>';

    }
    else {
      echo "error";
    }
} 


 }
 else {
    echo "Error: ". mysqli_error($con);
 }



?>
