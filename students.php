<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'connection.php' ?>
    <form method="post" action="insert-student.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />

        <label for="phone">Phone</label>
        <input type="phone" id="phone" name="phone" />

        <label for="address">Address</label>
        <input type="address" id="address" name="address" />
        <label for="deptid">Department</label>
        <select name="deptid">
            <?php
            $q = "SELECT * FROM dept";
            $result = mysqli_query($conn, $q);
            while ($rows = mysqli_fetch_array($result)) {
                echo '<option value="' . $rows['deptid'] . '">' . $rows['deptname'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>

    <table>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Employee Name</th>
            <th>Department Name</th>
        </tr>

        <?php
        $q = "SELECT * FROM student";
        $result = mysqli_query($conn, $q);
        while ($rows = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $rows['id'] . "</td>";
            echo '<td>' . $rows['name'] . "</td>";
            echo '<td>' . $rows['phone'] . "</td>";
            echo '<td>' . $rows['addresss'] . "</td>";
            echo "<td><a href='delete-student.php?id=" . $rows['id'] . "'>Delete</a></td>";
            echo "<td><a href='update-student.php?id=" . $rows['id'] . "'>Update</a></td>";


            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>