<?php
    session_start();
    echo "Session ID ของคุณคือ: " . session_id();

    session_regenerate_id(true);
    echo "<br>Session ID ใหม่ของคุณคือ: " . session_id();
?>