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
                <th>Parent_id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>DOB</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("db_conn.php");
                $Parent_id = $_GET["id"];
                $sql = " SELECT * FROM parent Where Parent_id = $Parent_id";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
             <tr>
                <td><?php echo $row["Parent_id"];?></td>
                <td><?php echo $row["First_Name"];?></td>
                <td><?php echo $row["Last_Name"];?></td>
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