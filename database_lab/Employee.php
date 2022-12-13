<?php
include 'connect.php';
$_SESSION['tb']='employee';
if(isset($_POST['back'])){
  unset($_SESSION['tb']);
  header('location:choose.php');
}
if(isset($_POST['submit'])){
    $ename=$_POST['ename'];
    $age=$_POST['eage'];
  $sql1="INSERT INTO `employee`(ename,age) values('$ename','$age')";
  $result=mysqli_query($conn,$sql1);

  if($result){
    header('location:Employee.php');
  }
  else{
    die(mysqli_error($conn));
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
    <h1 class="display-4">Employee Table</h1>
  </center>

  <div class="container">
    <form method="post">
      <div class="mb-3">
        <label>Employee Name</label>
        <input type="text" class="form-control" placeholder="Enter Employee Name" name="ename" autocomplete="off">
      </div>
      <div class="mb-3">
        <label>Employee Age</label>
        <input type="text" class="form-control" placeholder="Enter Age" name="eage" autocomplete="off">
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
          <th scope="col">Name</th>
          <th scope="col">Age</th>

        </tr>
      </thead>
      <tbody>
        <?php
            $sql2="SELECT * FROM `employee`";
            $result=mysqli_query($conn,$sql2);
            while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $name=$row['ename'];
              $age=$row['age'];

              echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$age.'</td>
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
