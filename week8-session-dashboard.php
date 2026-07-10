<?php
    session_start();

    if(isset($_SESSION["username"])) {
        echo "ยินดีต้อนรับคุณ " . $_SESSION["username"];
    } else {
        echo "กรุณาเข้าสู่ระบบก่อน";
    }
?>