
<?php

$title='success';
require_once 'includes/header.php';
?>
<h1 class="text-center"><b> You have Been Registered</b></h1>

<?php
   $firstname = $_REQUEST['firstname'];
   $lastname = $_REQUEST['lastname'];
   $datepicker = $_REQUEST['datepicker'];
   $specialty = $_REQUEST['specialty'];
   $address = $_REQUEST['address'];
   $number = $_REQUEST['number'];

   // $check

   $host = 'localhost';
   $dbname = 'user' ;
   $username = 'root' ;
   $password = '' ;

   $conn = mysqli_connect($host,$username,$password,$dbname);

   if(!$conn){
    die("connection failed: " . mysqli_connect_error());
   }

   $sql = "INSERT INTO usersd(Firstname,Lastname,specialty,address,datepicker,number)
   VALUES ('$firstname','$lastname','$specialty','$address','$datepicker','$number')";

   if (mysqli_query($conn,$sql)){
    echo "New record created successfully";
   }
   else{
    echo "Error: " . $sql . "<br>" . mysqli_connect_error($conn);
   }

   mysqli_close($conn);
   ?>

<div class="card" style="width: 18rem;">
<img src="img/logo.jpg" class="card-img-top"alt="">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $_GET['firstname'].' '.$_GET['lastname'];?>
</h5>
<p class="card-text">
specialty: <?php echo $_GET['specialty'];?>
</p>
<p class="card-text">
email address: <?php echo $_GET['address'];?>
</p>
<p class="card-text">
date of birth: <?php echo $_GET['datepicker'];?>
</p>
<p class="card-text">
contact number: <?php echo $_GET['number'];?>
</p>
    
  </div>
</div>
<br>
<br>
<?php require_once 'includes/footer.php';
?>