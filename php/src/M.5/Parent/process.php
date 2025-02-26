<?php
include "./db_conn.php";

if(isset($_POST['Add_parent'])){
    $First_Name = mysqli_real_escape_string($conn,$_POST['First_Name']);
    $Last_Name = mysqli_real_escape_string($conn,$_POST['Last_Name']);
    $DOB = $_POST['DOB'];
    $sql = "INSERT INTO parent(First_Name,Last_Name,DOB)
    VALUES('$First_Name','$Last_Name','$DOB')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('New record created successfully');
            window.location.href='index.php';
        </script>";
    }else {
        die("Error");
    }
}

if(isset($_POST['update_parent'])){
    $Parent_id = $_POST["Parent_id"];
    $First_Name = mysqli_real_escape_string($conn,$_POST['First_Name']);
    $Last_Name = mysqli_real_escape_string($conn,$_POST['Last_Name']);
    $DOB = $_POST['DOB'];
    $sql = "UPDATE parent SET First_Name = '$First_Name',Last_Name = '$Last_Name',DOB = '$DOB' WHERE Parent_id = '$Parent_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('Upated successfully');
            window.location.href='index.php';
        </script>";
    }else {
        die("Error");
    }
}

if(isset($_POST['delete_parent'])){
    $Parent_id = $_POST["Parent_id"];
    $sql = "DELETE FROM parent WHERE Parent_id = '$Parent_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "
        <script>
            alert('Deleted successfully');
            window.location.href='index.php';
        </script>";
    }else {
        die("Error");
    }
}
