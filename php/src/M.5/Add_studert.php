<?php
    include("db_conn.php");

    if (isset($_POST['submit'])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $gender = $_POST["Gender"];
        $dob = $_POST["DOB"];

        $sql = "INSERT INTO student (First_Name, Last_Name ,Gender ,DOB) VALUES ('$first_name', '$last_name', '$gender', '$dob')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('New record created successfully'); window.location.href='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
</head>
<body>
    <form action="./process.php" method="POST">
        <div class="form-element">
            <lable for="First_Name">First name</lable>
            <input type="text" name="First_Name" placeholder="First name" require>
        </div>
        <div class="form-element">
            <lable for="Last_Name">Last name</lable>
            <input type="text" name="Last_Name" placeholder="Last name" require>
        </div>
        <div class="form-element">
            <lable for="Gender">Gender</lable>
            <select name="Gender">
                <option value="">Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-element">
            <lable for="DOB">Birth date</lable>
            <input type="date" name="DOB">
        </div>
        <div class="form-element">
            <button type="submit" name="add_student" class="add-btn">Add Student</button>
        </div>
    </form>
</body>
</html>