<?php
    setcookie("user", "piyakorn", time() + 3600, "/");
    echo "ตั้ง cookie ชื่อ" . $_COOKIE["user"] . "piyakorn" . "เรียบร้อยแล้ว";
?>