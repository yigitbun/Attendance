<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $dob = $_POST['dateofbirth'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      // Call function to insert and track if success or not
      $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty);

      if($isSuccess){
        echo '<h1 class="text-center text-success">You have been registered</h1>';
      }
      else{
        '<h1 class="text-center text-danger">There was an error in processing</h1>';
      }
      
    }
    ?>



<!-- This prints out values that were passes to the action page using method="get" -->
<!-- 
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php // echo $_GET['firstname'] . ' ' . $_GET['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php // echo $_GET['firstname'];?></h6>
    <p class="card-text">Date of Birth: <?php // echo $_GET['dob'];?></p>
    <p class="card-text">Email Adress: <?php // echo $_GET['email'];?></p>
    <p class="card-text">Contact Number: <?php // echo $_GET['phone'];?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div> -->


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty'];?></h6>
    <p class="card-text">Date of Birth: <?php echo $_POST['dob'];?></p>
    <p class="card-text">Email Adress: <?php echo $_POST['email'];?></p>
    <p class="card-text">Contact Number: <?php echo $_POST['phone'];?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


    <?php 
       // echo $_GET['firstname'];
       // echo $_GET['lastname'];
       // echo $_GET['dob'];
       // echo $_GET['specialty'];
       // echo $_GET['email'];
       // echo $_GET['phone'];
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php require_once 'includes/footer.php'; ?>