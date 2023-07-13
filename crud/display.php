<?php

  include'connect.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CRUD Operation</title>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<button class="btn-primary my-5"> <a href="user.php" class="text-light">
		Add User </a> 
		</button>

		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID NO</th>
      <th scope="col">Name</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CITY</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
<?php

  $sql="select * from user";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['name'];
      $address=$row['address'];
      $contact=$row['contact'];
      $city=$row['city'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$address.'</td>
      <td>'.$contact.'</td>
      <td>'.$city.'</td>
        <td>
    <button class="btn btn-primary"> <a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
      </td>
    </tr>';
    }
  }

?>



  </tbody>
</table>

	</div>

</body>
</html>