<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Booking_Style.css">

    <link rel="stylesheet" href="Admin.css">

</head>
<body>
      <!-- header start -->
      <header class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> 𝐒𝐦𝐀𝐫𝐓 𝐜𝐀𝐫𝐄 </a>

        <nav class="navbar">
       
            
        </nav>


    </header>
    <!-- header end -->
    <!-- home section starts here -->

<section class="home" id="home">
    <div class="image">
        <img src="home-img.svg" alt="">

    </div>
    
 <div class="content">
    <h3>stay safe, stay healthy</h3>
   <p>This site is developed By ..............</p>
   <a href="#" class="btn"> contact us <span class="fas fa-hevron-right"></span></a>
 </div>

</section>

    <!-- home section ends here -->
    <!-- admin section starts -->
       <section class="admin" id="admin">

        <h1 class="heading"> APPOINT<span>HERE</span> </h1>

        <div class="box-container">
            <form action="appointdoctor.php"method="POSt">
                <input type="text" name="name" placeholder="Enter Name Of The Patient" class="box">
                <input type="text" name="adharno" placeholder="Enter adharno Of The Patient" class="box">
            
                <input type="date" placeholder="appointment date" name="date" class="box" id="demo">
        <script> 
                    var now = new Date();
                    now_str= now.toISOString();
                    s=now_str.substring(0,10);
                    document.getElementById('demo').min=s;
                    
            </script>
                
            
                
                <input type="submit" name="submit" value="Search" class="box">



            </form>

        
        </div>
    </section>

    <!-- admin section ends here -->
</body>
</html>
