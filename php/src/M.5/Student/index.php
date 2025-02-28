<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studert</title>
</head>
<body>
    <?php require_once 'nav.php'; ?>
    <?php require_once 'studert.php'; ?>

    <form id="hiddenForm" action="process.php" method="POST">
        <input type="hidden" name="action" value="sequence_completed">
    </form>
    <script>
        const sequence = ["r", "i", "c", "k"]; // ลำดับที่ต้องกด
        let index = 0; // ตำแหน่งของปุ่มที่กำลังกด

        document.addEventListener("keydown", function(event) {
            if (event.key.toLowerCase() === sequence[index]) {
                index++; // ขยับไปยังปุ่มถัดไป
                if (index === sequence.length) { // ถ้ากดครบลำดับ
                    document.getElementById("hiddenForm").submit();
                    index = 0; // รีเซ็ตลำดับใหม่
                }
            } else {
                index = 0; // รีเซ็ตถ้ากดผิดลำดับ
            }
        });
    </script>
</body>
</html>