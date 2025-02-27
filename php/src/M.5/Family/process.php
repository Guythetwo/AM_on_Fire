<?php
include "./db_conn.php";

if(isset($_POST['Add_family'])){
    $Student_Id = mysqli_real_escape_string($conn,$_POST['Student_Id']);
    $Parent_Id = mysqli_real_escape_string($conn,$_POST['Parent_Id']);
    $sql = "INSERT INTO family(Student_Id,Parent_Id)
    VALUES('$Student_Id','$Parent_Id')";
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

if(isset($_POST['update_family'])){
    $Family_Id = $_POST["Family_Id"];
    $Student_Id = mysqli_real_escape_string($conn,$_POST['Student_Id']);
    $Parent_Id = mysqli_real_escape_string($conn,$_POST['Parent_Id']);
    $sql = "UPDATE family SET Student_Id = '$Student_Id',Parent_Id = '$Parent_Id' WHERE Family_Id = '$Family_Id'";
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
