<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update family</title>
</head>
<body>
    <?php
    include "./db_conn.php";
    if(isset($_GET["id"])) {
        $Family_Id = $_GET["id"];
        include "db_conn.php";
        $sql = "SELECT * FROM family WHERE Family_Id = '$Family_Id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
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
            <input type="hidden" name="Family_Id" value="<?php echo $Family_Id;?>">
            <button type="submit" name="update_family" class="add-btn">Update</button>
        </div>
    </form>
    <?php } ?>
</body>
</html>