<?php

    require("config.php");

    if(isset($_POST['submit']))
    {
        $fullname = $_POST['user_name'];
        $Email = $_POST['user_email'];
        $phoneno = $_POST['user_num'];
        $Hospital = $_POST['Hos_name'];
        $Vaccine = $_POST['appointment_for'];
        $description = $_POST['appointment_description'];
        $App_Date = $_POST['date'];
        $App_Time = $_POST['time'];

          $query = " INSERT INTO appointment(fullname,Email,phoneno,Hospital,Vaccine,description,App_Date,App_Time) 
          values('$user_name','$user_email','$user_num','$Hos_name','$appointment_for','$appointment_description','$date','$time')";

            if($conn->query($query))
            {
              echo"success";
            }
            else
            {
                echo 'Please Check Your Query ';
            }
                    
    }
    $conn ->close();
  
?>

