<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add_family.php">ADD</a>
    <table>
        <thead>
            <tr>
                <th>Family_Id</th>
                <th>Student_Id</th>
                <th>Parent_Id</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("db_conn.php");
                $sql = " SELECT * FROM family";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
             <tr>
                <td><?php echo $row["Family_Id"];?></td>
                <td><a href="./show_id_Student.php?id=<?php echo $row["Student_Id"]?>"><?php echo $row["Student_Id"];?></a></td>
                <td><a href="./show_id_Parent.php?id=<?php echo $row["Parent_Id"]?>" name="Parent_Id"><?php echo $row["Parent_Id"];?></a></td>
                <td>
                    <a href="./update_family.php?id=<?php echo $row["Family_Id"]?>">edit</a>
                    <a href="./delete_family.php?id=<?php echo $row["Family_Id"]?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
