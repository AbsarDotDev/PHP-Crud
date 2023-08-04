<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'connection.php';
$id=$_GET['id'];
$q="SELECT * FROM student WHERE id='$id'";
$result=mysqli_query($conn,$q);
$rows=mysqli_fetch_array($result);

?>

<form method="post" action="update-student-data.php">
    <label for="name">Name</label>
<input type="text" id="name" name="name" value="<?php echo $rows['name'] ?>"/>

<label for="phone">Phone</label>
<input type="phone" id="phone" name="phone" value="<?php echo $rows['phone'] ?>"/>

<label for="address">Address</label>
<input type="address" id="address" name="address" value="<?php echo $rows['addresss'] ?>"/>
<label for="deptid">Department</label>
<select name="deptid" value="<?php echo $rows['deptid'] ?>">
        <?php
        $q = "SELECT * FROM dept";
        $result = mysqli_query($conn, $q);
        while ($rows = mysqli_fetch_array($result)) {
            echo '<option value="'.$rows['deptid'].'">'.$rows['deptname'].'</option>';
        }
        ?>
    </select>
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <input type="submit" value="Submit">
</form>
</body>
</html>