<?php
include 'connect.php';
$_SESSION['tb']='students';
if(isset($_POST['back'])){
  unset($_SESSION['tb']);
  header('location:choose.php');
}
if(isset($_POST['submit'])){
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $email=$_POST['email'];
  $department=$_POST['dept'];
  $phone=$_POST['numb'];

  $sql1="INSERT INTO `students`(firstname,lastname,email,department,phone) values('$firstname','$lastname','$email','$department','$phone')";
  $result=mysqli_query($conn,$sql1);

  if($result){
    header('location:Student.php');
  }
  else{
    die(mysqli_error($conn));
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

  <title>Lab 6</title>
  <style>
    .display-4 {
      padding: 50px;
    }
  </style>
</head>

<body>
  <center>
    <h1 class="display-4">Student Table</h1>
  </center>

  <div class="container">
    <form method="post">
      <div class="mb-3">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Firstname" name="fname" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Enter Your Lastname" name="lname" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Department</label>
        <input type="text" class="form-control" placeholder="Enter Your Department" name="dept" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Phone No.</label>
        <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="numb" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button type="submit" class="btn btn-primary" name="back">Go Back</button>
    </form>
  </div>
  <div class="display">
    <br>
    <br>
    <table class="table table-hover" style="padding-top: 30px; width:80%; margin-left: auto; margin-right: auto;">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Email</th>
          <th scope="col">Department</th>
          <th scope="col">Phone No.</th>

        </tr>
      </thead>
      <tbody>
        <?php
            $sql2="SELECT * FROM `STUDENTS`";
            $result=mysqli_query($conn,$sql2);
            while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $first=$row['firstname'];
              $last=$row['lastname'];
              $email=$row['email'];
              $depart=$row['department'];
              $phone=$row['phone'];

              echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$first.'</td>
              <td>'.$last.'</td>
              <td>'.$email.'</td>
              <td>'.$depart.'</td>
              <td>'.$phone.'</td>
              <td><button class="btn btn-primary"><a href="Update.php?updateid='.$id.'" class="text-light">UPDATE</a></button></td>
              <td><button class="btn btn-danger"><a href="Delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button></td>

            </tr>';
            }
          ?>
      </tbody>
    </table>
  </div>
</body>

</html>
