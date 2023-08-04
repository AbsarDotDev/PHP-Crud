<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include 'connection.php' ?>
<table>
  <tr>
    <th>Course ID</th>
    <th>Course Name</th>
    <th>Employee Name</th>
    <th>Department Name</th>
  </tr>

  <?php
  $q = "SELECT courses.cid,courses.courseName,emp.ename,dept.deptname FROM 
  courses,emp,dept where courses.empno=emp.empid AND courses.deptid = dept.deptid";
  $result = mysqli_query($conn, $q);
  while ($rows = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>'.$rows['cid'] . "</td>";
    echo '<td>'.$rows['courseName'] . "</td>";
    echo '<td>'.$rows['ename'] . "</td>";
    echo '<td>'.$rows['deptname'] . "</td>";
    echo '</tr>';
  }
  ?>
</table>
</body>

</html>