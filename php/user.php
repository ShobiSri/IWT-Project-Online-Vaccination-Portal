<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $contactno = $_POST['contactno'];
        $city = $_POST['city'];
        $dob = $_POST['birthdate'];

          $query = " INSERT INTO user(name,age,address,contactno,city,dob) 
          values('$name','$age','$address','$contactno',
            '$city','$birthdate')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Query Again';
            }
                    
    }
    $conn ->close();
  
?>