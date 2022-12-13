<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['update'])){
  $tbn=$_SESSION['tb'];

  if($tbn=='students'){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $department=$_POST['dept'];
    $phone=$_POST['numb'];
    $sql4="UPDATE `students` 
          SET `id`='$id', `firstname`= '$firstname', `lastname` = '$lastname',
           `email` = '$email', `department` = '$department', `phone` = '$phone' 
           WHERE `id` = '$id' ";
    $result=mysqli_query($conn,$sql4);

    if($result){
      header('location:Student.php');
    }
    else{
      die(mysqli_error($conn));
    }
  }
  elseif($tbn=='pets'){
    $n=$_POST['pname'];
    $ow=$_POST['oname'];
    $age=$_POST['page'];
    $sql4="UPDATE `pets` 
          SET `id`='$id',`pname`='$n',
           `ownern` = '$ow', `age` = '$age' 
           WHERE `id` = '$id' ";
    $result=mysqli_query($conn,$sql4);

    if($result){
      header('location:Pets.php');
    }
    else{
      die(mysqli_error($conn));
    }
  }
  elseif($tbn=='employees'){
    $n=$_POST['ename'];
    $age=$_POST['eage'];
    $sql4="UPDATE `employee` 
          SET `id`='$id',`ename`='$n',
          `age` = '$age' 
           WHERE `id` = '$id' ";
    $result=mysqli_query($conn,$sql4);

    if($result){
      header('location:Employee.php');
    }
    else{
      die(mysqli_error($conn));
    }
  }
  
}

?>

<!doctype html>
<html lang="en">

<head>
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
    <h1 class="display-4">Update <?php echo $_SESSION['tb']; ?></h1>
  </center>

  <?php
  if($_SESSION['tb']=='students'){
    echo '<div class="container">
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

        <button type="submit" class="btn btn-primary" name="update">Update</button>
      </form>
    </div>';
  }
  elseif($_SESSION['tb']=='pets'){
    echo '<div class="container">
      <form method="post">
        <div class="mb-3">
          <label>Pet Name</label>
          <input type="text" class="form-control" placeholder="Enter Pet Name" name="pname" autocomplete="off">
          </div>
        <div class="mb-3">
          <label>Owner Name</label>
          <input type="text" class="form-control" placeholder="Enter Owner Name" name="oname" autocomplete="off">
        </div>
        <div class="mb-3">
         <label>Age</label>
          <input type="number" class="form-control" placeholder="Enter Pet Age" name="page" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
      </form>
    </div>';
  }
  elseif($_SESSION['tb']=='employee'){
    echo '<div class="container">
      <form method="post">
        <div class="mb-3">
          <label>Employee Name</label>
          <input type="text" class="form-control" placeholder="Enter Name" name="ename" autocomplete="off">
        </div>
        <div class="mb-3">
          <label>Employee Age</label>
          <input type="number" class="form-control" placeholder="Enter Age" name="eage" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
      </form>
    </div>';
  }
  
  ?>

</body>

</html>