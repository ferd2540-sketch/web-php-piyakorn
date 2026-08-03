<?php
  $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

     try{
           $pdo = new pdo(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
      
        );

            $pdo->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION
        );
        $sql ="update student set age='21' where id=1";
        $pdo->exec($sql);
        echo "อัปเดตข้อมูลสำเร็จ";
     }catch(PDOException $e){
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
?>