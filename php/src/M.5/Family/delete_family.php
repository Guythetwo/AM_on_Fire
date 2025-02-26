<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add parent</title>
</head>
<body>
    <?php
    if(isset($_GET["id"])) {
        $Parent_id = $_GET["id"];
        echo "$Parent_id";
        include "db_conn.php";
        $sql = "SELECT * FROM parent WHERE Parent_id = '$Parent_id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="./process.php" method="POST">
        <div class="form-element">
            <input type="hidden" name="Parent_id" value="<?php echo $row["Parent_id"];?>">
            <button type="submit" name="delete_parent" class="add-btn">delete
            </button>
        </div>
    </form>
    <?php } ?>
</body>
</html>