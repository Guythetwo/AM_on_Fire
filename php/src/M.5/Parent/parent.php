<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Add_parent.php">ADD</a>
    <table>
        <thead>
            <tr>
                <th>Parent_id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>DOB</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("db_conn.php");
                $sql = " SELECT * FROM parent";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
             <tr>
                <td><?php echo $row["Parent_id"];?></td>
                <td><?php echo $row["First_Name"];?></td>
                <td><?php echo $row["Last_Name"];?></td>
                <td><?php echo $row["DOB"];?></td>
                <td>
                    <a href="./update_parent.php?id=<?php echo $row["Parent_id"]?>">edit</a>
                    <a href="./delete_parent.php?id=<?php echo $row["Parent_id"]?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
