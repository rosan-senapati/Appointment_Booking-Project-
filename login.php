<?php      
    include('db_connect.php');  
    $mobileno = $_POST['mobileno'];  
    $password = $_POST['lpassword'];  
      
        //to prevent from mysqli injection  
        $mobileno = stripcslashes($mobileno);  
        $password = stripcslashes($password);  
        $mobileno = mysqli_real_escape_string($con, $mobileno);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from userdata where mobile = '$mobileno' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $msg = "Your Are Successfully Loged In";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/Booking_Page.php?mobileno=' .$mobileno.'lpassword=' .$password.'";';
    echo '</script>';
        }  
        else{  
            $msg = "Login Failed.Invalid Mobile Number or Password";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/project/login.html";';
    echo '</script>';
        }     
?> 