<?php
$title = "หน้าแนะนำตัว";
$name = "ปิยะกรณ์ รอดแก้ว";
$age = 24;
$job = "นักเรียน/นักศึกษา";
$hobby = "อ่านหนังสือ และเขียนโปรแกรม ออกกำลังกาย และเล่นเกมกับกูดเพื่อน";
$bio = "สวัสดีครับ ผมชื่อ $name ยินดีที่ได้รู้จักครับ";
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; color: #333; padding: 40px; }
        .card { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.1); padding: 30px; }
        h1 { color: #2a6f97; }
        p { line-height: 1.7; }
        .info { margin-top: 20px; }
        .info dt { font-weight: bold; }
        .info dd { margin: 0 0 12px 0; }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $bio; ?></p>
        <dl class="info">
            <dt>ชื่อ</dt>
            <dd><?php echo $name; ?></dd>
            <dt>อายุ</dt>
            <dd><?php echo $age; ?> ปี</dd>
            <dt>อาชีพ</dt>
            <dd><?php echo $job; ?></dd>
            <dt>งานอดิเรก</dt>
            <dd><?php echo $hobby; ?></dd>
        </dl>
    </div>
</body>
</html>'