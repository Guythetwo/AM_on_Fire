<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>Student_id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Gender</th>
                <th>DOB</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("db_conn.php");
                $Parent_id = $_GET["id"];
                $sql = " SELECT * FROM student Where Student_Id = $Parent_id";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
             <tr>
                <td><?php echo $row["Student_Id"];?></td>
                <td><?php echo $row["First_Name"];?></td>
                <td><?php echo $row["Last_Name"];?></td>
                <td><?php echo $row["Gender"];?></td>
                <td><?php echo $row["DOB"];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <button onclick="back_button()">BACK</button>
    <script>
        function back_button() {
            window.location.href='index.php';
        }
    </script>
</body>
</html>