<?php
include("reg.php");
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

$query="SELECT *FROM  FORM";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
echo $result['fname']."     ".$result['lname']."     " .$result['gender'];



if($total !=0)
{
    echo "Table has records";
}
else{
    echo "No records found";
}
mysqli_close($conn);
?>