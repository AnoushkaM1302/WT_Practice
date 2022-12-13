<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $tbn=$_SESSION['tb'];

    $sql3="DELETE FROM `$tbn` WHERE id=$id";
    $result=mysqli_query($conn,$sql3);
    if($result){
        if($tbn=='students'){
            header('location:Student.php');
        }
        elseif($tbn=='pets'){
            header('location:Pets.php');
        }
        elseif($tbn=='employee'){
            header('location:Employee.php');
        }
        
    }
    else{
        die(mysqli_error($conn));
    }
}
?>