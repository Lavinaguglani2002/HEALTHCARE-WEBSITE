<?php
$server="localhost";
$username="root";
$password="";
$dbname="responsive";
$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn)
{
    echo "Connected";
}
else{
    echo "connection failed";
}
if($_POST['register'])
{
   $fname =  $_POST['fname'];
   $lname =  $_POST['lname'];
   $password =  $_POST['password'];
   $conpassword =  $_POST['conpassword'];
   $gender =  $_POST['gender'];
   $email =  $_POST['email'];
   $phone =  $_POST['phone'];
   $address =  $_POST['address'];

  $query= "INSERT INTO `form`(`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
   $data=mysqli_query($conn,$query);
   if($data){
    echo "Data submitted";
   }
   else{
    echo "Data failed";
   }
   mysqli_close($conn);

}

?>

