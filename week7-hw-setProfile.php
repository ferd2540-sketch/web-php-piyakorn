<?php
// week7-hw-setProfile.php
// ฟอร์มสำหรับกรอกชื่อและอัพโหลดไฟล์ภาพโปรไฟล์
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตั้งค่าโปรไฟล์</title>
    <style>
        :root {
            --bg: #f0f4ff;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --border: #d1d5db;
            --shadow: rgba(15, 23, 42, 0.08);
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(180deg, #eef4ff 0%, #f9fafb 100%);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }
        .card {
            width: 100%;
            max-width: 520px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 18px 40px var(--shadow);
            padding: 32px;
        }
        h1 {
            margin: 0;
            font-size: 1.9rem;
            letter-spacing: -0.03em;
        }
        p {
            color: var(--muted);
            margin: 12px 0 28px;
            line-height: 1.6;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .field {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 14px 16px;
            font-size: 1rem;
            color: var(--text);
            background: #fff;
            transition: border-color 0.2s ease;
        }
        input[type="text"]:focus,
        input[type="file"]:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
        }
        .hint {
            font-size: 0.95rem;
            color: var(--muted);
            margin-top: 6px;
        }
        .button-row {
            text-align: center;
        }
        button {
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 999px;
            padding: 14px 28px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }
        button:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
        }
        .note {
            margin-top: 20px;
            text-align: center;
            color: var(--muted);
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>ตั้งค่าโปรไฟล์</h1>
        <p>โปรดกรอกชื่อและอัปโหลดรูปภาพโปรไฟล์ เพื่อแสดงผลพร้อมชื่อด้านล่างภาพในหน้าถัดไป</p>
        <form method="post" action="week7-hw-showProfile.php" enctype="multipart/form-data">
            <div class="field">
                <label for="name">ชื่อ</label>
                <input type="text" id="name" name="name" placeholder="กรอกชื่อของคุณ" required>
            </div>

            <div class="field">
                <label for="avatar">อัปโหลดรูปภาพโปรไฟล์</label>
                <input type="file" id="avatar" name="avatar" accept="image/*" required>
                <div class="hint">รองรับไฟล์ภาพ JPG, PNG, GIF, WEBP ขนาดไม่เกิน 2MB</div>
            </div>

            <div class="button-row">
                <button type="submit">บันทึกโปรไฟล์</button>
            </div>
        </form>
        <div class="note">หากต้องการแก้ไข ให้กลับมาหน้านี้ใหม่ได้เสมอ</div>
    </div>
</body>
</html>
