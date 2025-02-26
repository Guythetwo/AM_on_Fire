<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
</head>
<body>
    <?php
    if(isset($_GET["id"])) {
        $Student_Id = $_GET["id"];
        include "db_conn.php";
        $sql = "SELECT * FROM student WHERE Student_Id = '$Student_Id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="./process.php" method="POST">
        <div class="form-element">
            <input type="hidden" name="Student_Id" value="<?php echo $row["Student_Id"];?>">
            <button type="submit" name="delete_student" class="add-btn">delete
            </button>
        </div>
    </form>
    <?php } ?>
</body>
</html>