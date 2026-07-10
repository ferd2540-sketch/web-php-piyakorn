<?php
if ($_SERVER['REQUEST_METHOD'] === "GET") {
$name = $_GET['username']??'ไม่ระบุ';
$password = $_GET['userpass']??'ไม่ระบุ';
$email = $_GET['userEmail']??'ไม่ระบุ';
$age = $_GET['userAge']?: 'ไม่ระบุ';
$gender = $_GET['userGender']??'ไม่ระบุ';
$birthday = $_GET['userBirthday']?: 'ไม่ระบุ';
$color = $_GET['userColor']??'ไม่ระบุ';
$city = $_GET['userCity']??'ไม่ระบุ';
$hobby = $_GET['userHobby'] ?? ['ไม่ระบุ'];
$msg = $_GET['userMsg']??'ไม่ระบุ';
}
echo "สวัสดีคุณ " . $name . "<br>";
echo "รหัสผ่านของคุณคือ: " . $password . "<br>";
echo "อีเมลของคุณคือ: " . $email . "<br>";
echo "อายุของคุณคือ: " . $age . "<br>";
echo "เพศของคุณคือ: " . $gender . "<br>";
echo "วันเกิดของคุณคือ: " . $birthday . "<br>";
echo "สีที่คุณเลือกคือ: " . $color . "<br>";
echo "จังหวัดของคุณคือ: " . $city . "<br>";
$hobby_str = count($hobby) ? implode(', ', $hobby) : 'ไม่ระบุ';
echo "งานอดิเรกของคุณคือ: " . $hobby_str . "<br>";
echo "<br>ความคิดเห็นของคุณคือ: " . $msg . "<br>";
echo '<a href="week5-send.php">กลับหน้าหลัก</a>';
?>