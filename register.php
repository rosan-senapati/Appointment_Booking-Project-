<?php
//Getting the value of Post Parameter 
  $name = $_POST['name'];
  $adharno = $_POST['adharno'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $tpassword = $_POST['tpassword'];
  $password = $_POST['password'];
  $age = $_POST['age'];

  //checking for valid name feild
  if(strlen($name)>20 or strlen($name)<2 ){
    $msg = "Please choos a name between 2 to 20 characters";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/login.html";';
    echo '</script>';
 }

 else if($tpassword != $password){
    $msg = "Password and Re-Entered Password Doesnt Match";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/login.html";';
    echo '</script>';

 }
 else{
    //connect to Database
    include 'db_connect.php';
 }
 

 //checking for Adharno exist
 $sql = "SELECT * FROM `userdata` WHERE adharno ='$adharno' ";
 $result = mysqli_query($con, $sql);

 if($result){
    if(mysqli_num_rows($result) > 0){
        $msg = "Enter Valid Adharcard Number It Already exist";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/project/login.html";';
        echo '</script>';
    


    }
    else{
      

    //inserting the data to userdata database
    $sql = "INSERT INTO `userdata` (`adharno`, `name`, `email`, `mobile`, `password`, `age`) VALUES ('$adharno', '$name', '$email', '$mobile', '$tpassword', '$age')";
    if(mysqli_query($con, $sql)){

        $msg = "Successfully Registered..";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/project/login.html";';
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
