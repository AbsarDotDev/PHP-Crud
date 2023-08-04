<?php 
include 'connection.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$deptid=$_POST['deptid'];

$q="INSERT INTO student(name,phone,addresss,deptid) VALUES('$name','$phone','$address','$deptid')";
$result=mysqli_query($conn,$q);
if($result==TRUE)
{
    echo("Data inserted successfully");
}
else
{
    echo("Data insertion failed");
}
