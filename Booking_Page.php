
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Booking_Style.css">

</head>
<body>

    <!-- header section starts -->

    <header class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> 𝐒𝐦𝐀𝐫𝐓 𝐜𝐀𝐫𝐄 </a>

        <nav class="navbar">
            <a href="HomePage.html">Home</a>
            <a href="#about">About Us</a>
            <a href="#service">Services</a>
            <a href="#contact">Contact</a>
            <a href="login.html">Log Out</a>
            
            
        </nav>


    </header>
    <!-- header section ends -->
    <!-- home section starts here -->

<section class="home" id="home">
    <div class="image">
        <img src="home-img.svg" alt="">

    </div>
    
 <div class="content">
    <h3>stay safe, stay healthy</h3>
   <p>This site is developed By BHADAR NUKASS</p>
   <a href="#" class="btn"> contact us <span class="fas fa-hevron-right"></span></a>
 </div>

</section>

    <!-- home section ends here -->
    <!-- booking section satrs here -->

<section class="book" id="book">

<h1 class="heading"> <span>book</span> now </h1>

<div class="row">

    <div class="image">
        <img src="booking-img.svg" alt="">
    </div>

    <form action="booking.php" method="post">
        <h3>book appointment</h3>
        <!-- //i changed here  -->
        <?php
        $mobileno = $_GET['mobileno'];
        include('db_connect.php');
         $sql = "select * from userdata where mobile = '$mobileno'";  
         $result = mysqli_query($con, $sql); 
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

         echo '<input type="text" name="adharno" value='.$row['adharno'].' class="box"><br/>'


        ?>
        <input type="text" placeholder="Your Name" name="name" class="box">
        <input type="number" placeholder="Your Age" name="age" class="box">
        <select  name="department" class="box">
            <option value="Choose">Select Department</option>
            <option value="Arv">Arv</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Dental">Dental</option>
            <option value="ENT">ENT</option>
            <option value="Medicine">Medicine</option>
            <option value="Orthopaedics">Orthopaedics</option>
            <option value="Paediatrics">Paediatrics</option>
            <option value="Skin">Skin</option>
            <option value="Surgery">Surgery</option>
        </select>
        <input type="date" placeholder="appointment date" name="date" class="box" id="demo">
        <script> 
                    var now = new Date();
                    now_str= now.toISOString();
                    s=now_str.substring(0,10);
                    document.getElementById('demo').min=s;
                    
            </script>
        <input type="time" placeholder="appointment time" name="time" class="box">
        <input type="submit" value="book now" class="btn">
    </form>

</div>

</section>    

    <!-- booking section ends here -->
    <!-- footer section starts here -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> login </a>
                
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardiology </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance services </a>
                
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-4444 </a>
                <a href="#"> <i class="fas fa-envelope"></i> abcdefgh@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> jklzxcfd@yahoo.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> cuttack, odisha - 753001 </a>
                
            </div>

            
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fas fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fas fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fas fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fas fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fas fa-pinterest"></i> pinterest </a>
                
            </div>

        </div>

        <div class="credit"> created by <span>Bhadra nukass</span> |all rights reserved </div>

    </section>

    <!-- footer section ends here -->

</body>
</html>