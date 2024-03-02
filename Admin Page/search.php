
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchDeatils</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body style="">
<h1  class="text-center">RESULT</h1>
<table class="table table-bordered"  style="border:3px solid green;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">DATE</th>
      <th scope="col">TIME</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('db_connect.php');
    $name=$_POST['name'];
    $adharno=$_POST['adharno'];
    $date=$_POST['date'];
    $n=1;
    
      $sql =" SELECT * FROM apointment WHERE (adharno='$adharno' AND name='$name') OR date='$date'";
      $result = mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
   
   <tr>
       <td><?php echo $row['id'];?></td>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['department'];?></td>
       <td><?php echo $row['date'];?></td>
       <td><?php echo $row['time'];?></td>

    </tr>
    <?php
    $n++;
    } 
    ?>
  
   
  </tbody>
</table>

<div class="text-center">
    <button onclick="window.print()" class="btn btn-primary">Download</button>
</div>
    
</body>
</html>