<?php
include 'connection.php';
$id=$_GET['id'];
$q="DELETE FROM student WHERE id='$id'";
$result=mysqli_query($conn,$q);
if($result==TRUE)
{
    echo("Data deleted successfully");
}
else
{
    echo("Data deletion failed");
}

?>