<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add family</title>
</head>
<body>
    <form action="./process.php" method="POST">
    <div>
        <label>Student_Id</label>
        <select name="Student_Id">
            <option value="">Student_Id</option>
            <?php
                include("db_conn.php");
                $sql = " SELECT * FROM student";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $row["Student_Id"];?>" selected><?php echo $row["Student_Id"];?> <?php echo $row["First_Name"];?> <?php echo $row["Last_Name"];?></option>
            <?php }?>
        </select>
    </div>

    <div>
        <label>Parent_Id</label>
        <select name="Parent_Id">
            <option value="">Parent_Id</option>
            <?php
                include("db_conn.php");
                $sql = " SELECT * FROM parent";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $row["Parent_id"];?>" selected><?php echo $row["Parent_id"];?> <?php echo $row["First_Name"];?> <?php echo $row["Last_Name"];?></option>
            <?php }?>
        </select>
    </div>
        <div class="form-element">
            <button type="submit" name="Add_family" class="add-btn">Add family</button>
        </div>
    </form>
</body>
</html>
