<?php
/**
 * PHP Introduction - แนะนำตัวเอง
 */

// ข้อมูลส่วนตัว (Personal Information)
$firstName = "ปิยะกรณ์";
$lastName = "รอดแก้ว";
$title = "นาย";
$studentId = "69319010010";
$institution = "วิทยาลัยอาชีวศึกษา";
$department = "เทคโนโลยีสารสนเทศ";

// สร้างฟังก์ชันแนะนำตัวเอง
function introduceMySelf($title, $firstName, $lastName, $studentId, $institution, $department) {
    $fullName = $title . "." . $firstName . " " . $lastName;
    
    echo "<!DOCTYPE html>";
    echo "<html lang='th'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <title>แนะนำตัวเอง - " . htmlspecialchars($fullName) . "</title>";
    echo "    <style>";
    echo "        body { font-family: 'Tahoma', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); margin: 0; padding: 20px; }";
    echo "        .container { max-width: 600px; margin: 50px auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }";
    echo "        h1 { color: #333; text-align: center; margin-bottom: 30px; }";
    echo "        .info-group { margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-left: 4px solid #667eea; border-radius: 5px; }";
    echo "        .label { font-weight: bold; color: #667eea; display: inline-block; width: 150px; }";
    echo "        .value { color: #333; }";
    echo "        .footer { text-align: center; margin-top: 30px; color: #666; font-size: 12px; }";
    echo "    </style>";
    echo "</head>";
    echo "<body>";
    echo "    <div class='container'>";
    echo "        <h1>🎓 แนะนำตัวเอง</h1>";
    echo "        <div class='info-group'>";
    echo "            <span class='label'>ชื่อ-สกุล:</span>";
    echo "            <span class='value'>" . htmlspecialchars($fullName) . "</span>";
    echo "        </div>";
    echo "        <div class='info-group'>";
    echo "            <span class='label'>รหัสประจำตัว:</span>";
    echo "            <span class='value'>" . htmlspecialchars($studentId) . "</span>";
    echo "        </div>";
    echo "        <div class='info-group'>";
    echo "            <span class='label'>สถาบันการศึกษา:</span>";
    echo "            <span class='value'>" . htmlspecialchars($institution) . "</span>";
    echo "        </div>";
    echo "        <div class='info-group'>";
    echo "            <span class='label'>แผนกวิชา:</span>";
    echo "            <span class='value'>" . htmlspecialchars($department) . "</span>";
    echo "        </div>";
    echo "        <div class='footer'>";
    echo "            <p>Generated on: " . date('d/m/Y H:i:s') . "</p>";
    echo "        </div>";
    echo "    </div>";
    echo "</body>";
    echo "</html>";
}

// เรียกใช้ฟังก์ชันแนะนำตัวเอง
introduceMySelf($title, $firstName, $lastName, $studentId, $institution, $department);
?>
