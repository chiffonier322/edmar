
<?php
$title='success';
require_once 'includes/header.php';
?>
<h1 class="text-center"><b> You have Been Registered</b></h1>

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