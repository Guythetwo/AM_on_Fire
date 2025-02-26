<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Parent</title>
</head>
<body>
    <form action="./process.php" method="POST">
        <div class="form-element">
            <label for="First_Name">First name</label>
            <input type="text" id="First_Name" name="First_Name" placeholder="First name" required>
        </div>
        <div class="form-element">
            <label for="Last_Name">Last name</label>
            <input type="text" id="Last_Name" name="Last_Name" placeholder="Last name" required>
        </div>
        <div class="form-element">
            <label for="DOB">Birth date</label>
            <input type="date" id="DOB" name="DOB" required>
        </div>
        <div class="form-element">
            <button type="submit" name="Add_parent" class="add-btn">Add parent</button>
        </div>
    </form>
</body>
</html>
