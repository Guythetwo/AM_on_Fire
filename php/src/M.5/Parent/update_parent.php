<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update parent</title>
</head>
<body>
    <?php
    include "./db_conn.php";
    if(isset($_GET["id"])) {
        $Parent_id = $_GET["id"];
        include "db_conn.php";
        $sql = "SELECT * FROM parent WHERE Parent_id = '$Parent_id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="./process.php" method="POST">
        <div class="form-element">
            <lable for="First_Name">First name</lable>
            <input type="text" name="First_Name" value="<?php echo $row["First_Name"];?>" placeholder="First name" require>
        </div>
        <div class="form-element">
            <lable for="Last_Name">Last name</lable>
            <input type="text" name="Last_Name" value="<?php echo $row["Last_Name"];?>" placeholder="Last name" require>
        </div>
        <div class="form-element">
            <lable for="DOB">Birth date</lable>
            <input type="date" name="DOB" value="<?php echo $row["DOB"];?>">
        </div>
        <div class="form-element">
            <input type="hidden" name="Parent_id" value="<?php echo $row["Parent_id"];?>">
            <button type="submit" name="update_parent" class="add-btn">Update</button>
        </div>
    </form>
    <?php } ?>
</body>
</html>