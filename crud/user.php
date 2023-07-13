<?php

  include 'connect.php';

  if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];

    $sql="insert into user(id,name,address,contact,city) values('$id','$name','$address','$contact','$city')";

    $result=mysqli_query($con,$sql);

    if($result){
      //echo "Date inserted Successfully";
      header('location:display.php');
    }
    else{
      die(mysqli_error($con));
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>User CRUD Operations </title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">

  <div class="form-group">
    <label>ID Number</label>
    <input type="text" class="form-control" placeholder="Enter your Id Number" name="id">
  </div>

  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name">
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="address">
  </div>

  <div class="form-group">
    <label>Contact Number</label>
    <input type="text" class="form-control" placeholder="Enter your Contact Number" name="contact">
  </div>

  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" placeholder="Enter your City" name="city">
  </div>




  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>