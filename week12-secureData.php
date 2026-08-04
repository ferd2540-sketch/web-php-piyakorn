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

        $name = "piyakorn";

        $sql ="
        SELECT * FROM student WHERE name = ?";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$name]);

        $student = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo "นักศึกษาที่มีชื่อ" . $name . " มีข้อมูลดังนี้ <br>";
        echo "ID: " . $student['id'] . "<br>";  

     }catch(PDOException $e){
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
?>