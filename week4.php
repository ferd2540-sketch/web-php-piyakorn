Set-Content -Path 'c:\xampp\htdocs\web-php-piyakorn\week4.php' -Value @'
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 PHP</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 720px; margin: 2rem auto; padding: 1rem; background: #f7f7f7; }
        h1, h2 { color: #333; }
        .card { background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 1rem 1.2rem; margin-bottom: 1.4rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05); }
        label { display: block; margin-top: 0.8rem; }
        input[type="number"] { width: 100%; padding: 0.6rem; margin-top: 0.3rem; box-sizing: border-box; }
        button { margin-top: 1rem; padding: 0.7rem 1.1rem; border: none; background: #007bff; color: #fff; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        pre { background: #f0f0f0; padding: 1rem; border-radius: 6px; }
    </style>
</head>
<body>
    <h1>โปรแกรม PHP สองฟังก์ชัน</h1>
    <div class="card">
        <h2>1) ตารางสูตรคูณ</h2>
        <form method="post">
            <label for="multiplication_number">ป้อนตัวเลข:</label>
            <input type="number" id="multiplication_number" name="multiplication_number" min="0" step="1" required value="<?php echo isset($_POST['multiplication_number']) ? intval($_POST['multiplication_number']) : ''; ?>">
            <button type="submit" name="action" value="multiply">แสดงสูตรคูณ</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'multiply') {
            $n = intval($_POST['multiplication_number']);
            echo '<h3>ผลลัพธ์ตารางสูตรคูณของ ' . htmlspecialchars($n, ENT_QUOTES, 'UTF-8') . '</h3>';
            echo '<pre>';
            for ($i = 1; $i <= 12; $i++) {
                echo "$n x $i = " . ($n * $i) . "\n";
            }
            echo '</pre>';
        }
        ?>
    </div>

    <div class="card">
        <h2>2) การบวกตัวเลข 2 ตัว</h2>
        <form method="post">
            <label for="number1">ตัวเลขตัวแรก:</label>
            <input type="number" id="number1" name="number1" step="any" required value="<?php echo isset($_POST['number1']) ? htmlspecialchars($_POST['number1'], ENT_QUOTES, 'UTF-8') : ''; ?>">
            <label for="number2">ตัวเลขตัวที่สอง:</label>
            <input type="number" id="number2" name="number2" step="any" required value="<?php echo isset($_POST['number2']) ? htmlspecialchars($_POST['number2'], ENT_QUOTES, 'UTF-8') : ''; ?>">
            <button type="submit" name="action" value="add">บวกและแสดงผล</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
            $a = floatval($_POST['number1']);
            $b = floatval($_POST['number2']);
            $sum = $a + $b;
            echo '<h3>ผลลัพธ์การบวก</h3>';
            echo '<p>' . htmlspecialchars($a, ENT_QUOTES, 'UTF-8') . ' + ' . htmlspecialchars($b, ENT_QUOTES, 'UTF-8') . ' = ' . htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') . '</p>';
        }
        ?>
    </div>
</body>
</html>