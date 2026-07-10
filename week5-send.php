<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <form action="week5.receive.php" method="GET">
    <label>username</label>
    <input type="text" name="username" required><br>
    
    <label>password</label>
    <input type="password" name="userpass" required><br>
    
    <label>email</label>
    <input type="email" name="userEmail">
    <br>

    <label>อายุ</label>
    <input type="number" name="userAge">
    <br>

    <label>เพศ</label>
    <input type="radio" name="userGender" value="ชาย">ชาย
    <input type="radio" name="userGender" value="หญิง">หญิง 
    <input type="radio" name="userGender" value="อื่นๆ">อื่นๆ
    <br>

    <label>วันเกิด</label>
    <input type="date" name="userBirthday">
    <br>

    <label>color</label>
    <input type="color" name="userColor">
    <br>
    
    <label>จังหวัด</label>
    <select name="userCity">
        <option value="ไม่ระบุ">-</option>
        <option value="กรุงเทพฯ">กรุงเทพฯ</option>
        <option value="เชียงใหม่">เชียงใหม่</option>
        <option value="ภูเก็ต">ภูเก็ต</option>
        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
        <option value="นนทบุรี">นนทบุรี</option>
        <option value="นครนายก">นครนายก</option>
    </select>
    <br>
    <label>งานอดิเรก</label>
    <input type="checkbox" name="userHobby[]" value="เกม">เกม
    <input type="checkbox" name="userHobby[]" value="กีฬา">กีฬา
    <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ">อ่านหนังสือ
    <input type="checkbox" name="userHobby[]" value="ฆ่าferd2540">ฆ่าferd2540
    <br>
    <label>ความคิดเห็น</label>
    <textarea name="userMsg"></textarea>
    <br>
    <input type="submit" value="ส่งข้อมูล">
    <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>