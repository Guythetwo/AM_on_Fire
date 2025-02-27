<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete family</title>
</head>
<body>
    <?php
    if(isset($_GET["id"])) {
        $Family_Id = $_GET["id"];
        echo "$Family_Id";
        include "db_conn.php";
        $sql = "SELECT * FROM family WHERE Family_Id = '$Family_Id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="./process.php" method="POST">
        <div class="form-element">
            <input type="hidden" name="Family_Id" value="<?php echo $row["Family_Id"];?>">
            <button type="submit" name="delete_family" class="add-btn">delete
            </button>
        </div>
    </form>
    <?php } ?>
</body>
</html>