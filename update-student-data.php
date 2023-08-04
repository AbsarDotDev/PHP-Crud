<?php
include 'connection.php';
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$deptid=$_POST['deptid'];
$q="UPDATE student SET name='$name',phone='$phone',addresss='$address',deptid='$deptid' WHERE id='$id'";
$result=mysqli_query($conn,$q);
if($result==TRUE)
{
    echo("Data updated successfully");
}
else
{
    echo("Data updation failed");
}

?>