<?php
$DBname="school";
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo("Unable to connect to web server ");
    die();
}
else
{
    echo("<h1>Connected to web server successfully</h1>");
}
$db=mysqli_select_db($conn,$DBname);
if(!$db)
{
    echo("Unable to connect to web server ");
    die();
}
else
{
    echo("<br><h1>Connected to Database successfully</h1>");

}
?>