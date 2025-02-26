<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Add_studert.php">ADD</a>
    <table>
        <thead>
            <tr>
                <th>Student_id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("db_conn.php");
                $sql = " SELECT * FROM student";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
             <tr>
                <td><?php echo $row["Student_Id"];?></td>
                <td><?php echo $row["First_Name"];?></td>
                <td><?php echo $row["Last_Name"];?></td>
                <td><?php echo $row["Gender"];?></td>
                <td><?php echo $row["DOB"];?></td>
                <td>
                    <a href="./update_studert.php?id=<?php echo $row["Student_Id"]?>">edit</a>
                    <a href="./delete_studert.php?id=<?php echo $row["Student_Id"]?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
