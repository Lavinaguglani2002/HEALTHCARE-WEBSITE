<?php
$server="localhost";
$username="root";
$password="";
$dbname="test";
$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn)
{
    echo "Connected";
}
else{
    echo "connection failed";
}
if(isset($_POST['send']))
{
   $name =  $_POST['name'];
   $email =  $_POST['email'];
   $enquiry =  $_POST['enquiry'];
   $phone =  $_POST['phone'];
   $message =  $_POST['message'];
   
$query="INSERT INTO `contact`(`name`, `email`, `enquiry`, `phone`, `message`) VALUES ('$name','$email','$enquiry','$phone','message')";
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