<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <form action="registeration-accept.php" method="GET">
    <label>username</label>
    <input type="text" name="username" required><br><br>

    <label>email</label>
    <input type="email" name="userEmail" required><br><br>

    <label>เบอร์โทรศัพท์</label>
    <input type="tel" name="usertel" required><br><br>

    <label>password</label>
    <input type="password" name="userpass" required><br><br>

    <label>เงินเดือน</label>
    <input type="number" name="userSalary" required><br><br>

    <label>วันเริ่มงาน</label>
    <input type="date" name="userStartDate"><br><br>

    <label>เพศ</label>
    <input type="radio" name="userGender" value="ชาย">ชาย
    <input type="radio" name="userGender" value="หญิง">หญิง
    <input type="radio" name="userGender" value="อื่นๆ">อื่นๆ<br><br>
    <label>ตำแหน่งที่สนใจ</label>
    <select name="userPosition">
        <option value="ไม่ระบุ">-</option>
        <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
        <option value="นักออกแบบ">นักออกแบบ</option>
        <option value="นักวิเคราะห์">นักวิเคราะห์</option>
        <option value="ผู้จัดการ">ผู้จัดการ</option>
    </select>
    <br><br>

    <label>ทักษะความสามารถ</label>
    <input type="checkbox" name="userSkill[]" value="PHP">PHP
    <input type="checkbox" name="userSkill[]" value="CSS">CSS
    <input type="checkbox" name="userSkill[]" value="Python">Python
    <input type="checkbox" name="userSkill[]" value="HTML">HTML
    <br><br>
    <label>ความคิดเห็นเพิ่มเติม</label>
    <input type="text" name="userFeedback">
    <br><br>
    <input type="submit" value="ส่งข้อมูล">
    <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>