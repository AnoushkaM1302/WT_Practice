<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <h1 class="display-4">Choose A Table</h1>
  </center>
    <div class="container">
        <button type="button" class="btn btn-primary" name="Students" onClick="window.location.href='/database_lab/Student.php';">Students</button>
        <button type="button" class="btn btn-primary" name="Pets" onClick="window.location.href='/database_lab/Pets.php';">Pets</button>
        <button type="button" class="btn btn-primary" name="Employees" onClick="window.location.href='/database_lab/Employee.php';">Employees</button>
</body>
</html>