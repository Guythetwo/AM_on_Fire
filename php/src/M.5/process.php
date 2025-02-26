<?php
include "./db_conn.php";

if(isset($_POST['add_student'])){
    $First_Name = mysqli_real_escape_string($conn,$_POST['First_Name']);
    $Last_Name = mysqli_real_escape_string($conn,$_POST['Last_Name']);
    $Gender = mysqli_real_escape_string($conn,$_POST['Gender']);
    $DOB = $_POST['DOB'];
    $sql = "INSERT INTO student(First_Name,Last_Name,Gender,DOB)
    VALUES('$First_Name','$Last_Name','$Gender','$DOB')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('New record created successfully');
            window.location.href='studert.php';
        </script>";
    }else {
        die("Error");
    }
}

if(isset($_POST['update_student'])){
    $Student_Id = $_POST["Student_Id"];
    $First_Name = mysqli_real_escape_string($conn,$_POST['First_Name']);
    $Last_Name = mysqli_real_escape_string($conn,$_POST['Last_Name']);
    $Gender = mysqli_real_escape_string($conn,$_POST['Gender']);
    $DOB = $_POST['DOB'];
    $sql = "UPDATE student SET First_Name = '$First_Name',Last_Name = '$Last_Name',Gender = '$Gender',DOB = '$DOB' WHERE Student_Id = '$Student_Id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('Upated successfully');
            window.location.href='studert.php';
        </script>";
    }else {
        die("Error");
    }
}

if(isset($_POST['delete_student'])){
    $Student_Id = $_POST["Student_Id"];
    $sql = "DELETE FROM student WHERE Student_Id = '$Student_Id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('Deleted successfully');
            window.location.href='studert.php';
        </script>";
    }else {
        die("Error");
    }
}
