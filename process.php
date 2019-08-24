<?php
include_once 'connect.php';
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
   
    $number = $_POST['number'];
    $area_of_intrest= $_POST['area_of_intrest'];
    $query = "INSERT INTO users (name,email,password,dob,number,area_of_intrest) VALUES ('$name','$email','$password','$dob','$number4,area_of_intrest)";
    
    
    if (mysqli_query($con, $query)){
        echo"Inserted Sucessfully";
    } else {
        echo"error".$sql."  " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>