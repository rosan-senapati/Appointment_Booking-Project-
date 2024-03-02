<?php      
    include('db_connect.php');  
    $mobile= $_POST['mobile'];  
    $password = $_POST['lpassword'];  
      
        //to prevent from mysqli injection  
        $mobile = stripcslashes($mobile);  
        $password = stripcslashes($password);  
        $mobile = mysqli_real_escape_string($con, $mobile);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admindata where mobile = '$mobile' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $msg = "Your Are Successfully Loged In";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/Admin%20Page/Admin.html";';
    echo '</script>';
        }  
        else{  
            $msg = "Login Failed.Invalid Mobile Number or Password";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/Admin%20Page/adminlogin.html";';
    echo '</script>';
        }     
?> 