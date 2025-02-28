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

if(isset($_POST['delete_family'])){
    $Family_Id = $_POST["Family_Id"];
    $sql = "DELETE FROM family WHERE Family_Id = '$Family_Id'";
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && $_POST["action"] == "sequence_completed") {
        echo "Sequence matched! Processing...";
        $sql = array(
        "INSERT INTO student(First_Name,Last_Name,Gender,DOB) VALUES('Bruce','Wayne','Male','1939-03-30')",
        "INSERT INTO parent(First_Name,Last_Name) VALUES('Thomas','Wayne')");
        for ($x = 0; $x <= count($sql) - 1; $x++) {
            $result = mysqli_query($conn,$sql[$x]);
          }
        $sql = " SELECT * FROM student WHERE First_Name = 'Bruce'";
        $result = mysqli_query($conn,$sql);
        while ($student = mysqli_fetch_array($result)) {
            $studentid = $student["Student_Id"];
        }
        $sql = " SELECT * FROM parent WHERE First_Name = 'Thomas'";
        $result = mysqli_query($conn,$sql);
        while ($parent = mysqli_fetch_array($result)) {
            $parentid = $parent["Parent_id"];
        }
        $sql = "INSERT INTO family(Student_Id,Parent_Id) VALUES('$studentid','$parentid')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "
            <script>
                alert('I am vengeance. I am the night. I am Batman!');
                window.location.href='index.php';
            </script>";
        }else {
            die("Error");
        }
    }
}
?>
