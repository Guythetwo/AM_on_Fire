<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update student</title>
</head>
<body>
    <?php
    include "./db_conn.php";
    if(isset($_GET["id"])) {
        $Student_Id = $_GET["id"];
        include "db_conn.php";
        $sql = "SELECT * FROM student WHERE Student_Id = '$Student_Id'";
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
            <lable for="Gender">Gender</lable>
            <select name="Gender">
                <option value="">Select your gender</option>
                <option value="Male" <?php if($row["Gender"]=="Male"){echo "selected";}?>>Male</option>
                <option value="Female" <?php if($row["Gender"]=="Female"){echo "selected";}?>>Female</option>
            </select>
        </div>
        <div class="form-element">
            <lable for="DOB">Birth date</lable>
            <input type="date" name="DOB" value="<?php echo $row["DOB"];?>">
        </div>
        <div class="form-element">
            <input type="hidden" name="Student_Id" value="<?php echo $row["Student_Id"];?>">
            <button type="submit" name="update_student" class="add-btn">Update</button>
        </div>
    </form>
    <?php } ?>
</body>
</html>