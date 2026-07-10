<?php
// week7-hw-showProfile.php
// รับข้อมูลชื่อและไฟล์ภาพที่อัพโหลด
$profileName = "";
$imageUrl = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $profileName = trim($_POST["name"] ?? "");

    if ($profileName === "") {
        $error = "กรุณากรอกชื่อก่อนส่งแบบฟอร์ม";
    } elseif (!isset($_FILES["avatar"])) {
        $error = "ไม่พบไฟล์ภาพที่อัปโหลด";
    } else {
        $file = $_FILES["avatar"];

        if ($file["error"] !== UPLOAD_ERR_OK) {
            $error = "เกิดข้อผิดพลาดขณะอัปโหลดไฟล์ (รหัส: " . $file["error"] . ")";
        } else {
            $maxSize = 2 * 1024 * 1024; // 2MB
            if ($file["size"] > $maxSize) {
                $error = "ไฟล์ภาพต้องไม่เกิน 2MB";
            } else {
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $mimeType = $finfo->file($file["tmp_name"]);
                $allowed = ["image/jpeg", "image/png", "image/gif", "image/webp"];

                if (!in_array($mimeType, $allowed, true)) {
                    $error = "รองรับเฉพาะไฟล์ภาพประเภท JPG, PNG, GIF หรือ WEBP เท่านั้น";
                } else {
                    $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
                    $safeName = uniqid("profile_", true) . "." . strtolower($ext);
                    $targetDir = __DIR__ . "/uploads/avatars";

                    if (!is_dir($targetDir) && !mkdir($targetDir, 0755, true)) {
                        $error = "ไม่สามารถสร้างโฟลเดอร์สำหรับเก็บรูปภาพได้";
                    } else {
                        $targetPath = $targetDir . DIRECTORY_SEPARATOR . $safeName;
                        if (!move_uploaded_file($file["tmp_name"], $targetPath)) {
                            $error = "ไม่สามารถย้ายไฟล์ภาพไปยังโฟลเดอร์ปลายทางได้";
                        } else {
                            $imageUrl = "uploads/avatars/" . $safeName;
                        }
                    }
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์ของฉัน</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 24px; }
        .container { max-width: 640px; margin: 0 auto; text-align: center; }
        .profile-card { display: inline-block; border: 1px solid #ddd; padding: 18px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .profile-card img { max-width: 100%; border-radius: 10px; }
        .profile-card h2 { margin: 14px 0 0; }
        .error { color: #b00020; font-weight: bold; margin-bottom: 18px; }
        .back-link { display: inline-block; margin-top: 16px; text-decoration: none; color: #007bff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>แสดงโปรไฟล์</h1>

        <?php if ($error !== ""): ?>
            <div class="error"><?= htmlentities($error, ENT_QUOTES, 'UTF-8') ?></div>
            <a href="week7-hw-setProfile.php" class="back-link">กลับไปหน้าตั้งค่าโปรไฟล์</a>
        <?php elseif ($imageUrl !== ""): ?>
            <div class="profile-card">
                <img src="<?= htmlentities($imageUrl, ENT_QUOTES, 'UTF-8') ?>" alt="โปรไฟล์ของ <?= htmlentities($profileName, ENT_QUOTES, 'UTF-8') ?>">
                <h2><?= htmlentities($profileName, ENT_QUOTES, 'UTF-8') ?></h2>
            </div>
            <div>
                <a href="week7-hw-setProfile.php" class="back-link">แก้ไขโปรไฟล์ใหม่</a>
            </div>
        <?php else: ?>
            <div class="error">ไม่มีข้อมูลโปรไฟล์ให้แสดง</div>
            <a href="week7-hw-setProfile.php" class="back-link">กลับไปหน้าตั้งค่าโปรไฟล์</a>
        <?php endif; ?>
    </div>
</body>
</html>
