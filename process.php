<?php
 $con = mysqli_connect('localhost','root','','registrationform');
require_once('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $countrycode= mysqli_real_escape_string($con, $_POST['countrycode']); 
    $phone= mysqli_real_escape_string($con,$_POST['phonenumber']);
    $country= mysqli_real_escape_string($con,$_POST['country']);
    $department= mysqli_real_escape_string($con,$_POST['courses']);
   
    $sql = "insert into studentdata(name,email,countrycode,phonenumber,country,courses) values('$name', '$email', '+$countrycode', $phone, '$country', '$department')";
    $result=mysqli_query($con,$sql);
}







/* $con = mysqli_connect('localhost','root','','registrationform');
require_once('connection.php');

if(isset($_POST['submit-btn']))
{
 $name= mysqli_real_escape_string($con,$_POST['name']);
 $email= mysqli_real_escape_string($con,$_POST['email']);

 $phone= mysqli_real_escape_string($con,$_POST['phone']);
 $country= mysqli_real_escape_string($con,$_POST['country']);
 $department= mysqli_real_escape_string($con,$_POST['department']);



 if(empty($name) || empty($email)  || empty($phone) || empty($country)|| empty($department))
 {
   echo 'please Fill the Blanks';
 }

else
{
  $sql = "insert into information(name,email,Phonenumber,country,course) values('$name','$email', $phone ,'$country','$department')";
  $result=mysqli_query($con,$sql);

  if($result)
  { $_SESSION['status']="Registered Sucessfully";
    $_SESSION['status_code']="success";
   
  }
else{
  $_SESSION['status']="Data Not Registered ";
    $_SESSION['status_code']="error";
    }
}
} */
?>
